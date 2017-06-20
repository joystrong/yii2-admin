<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <?php
        $callback = function ($menu){
            $data = json_decode($menu['data'],true);
            $items = $menu['children'];
            $return = [
                'label'=>$menu['name'],
                'url'=>[$menu['route']]
            ];
            if($data){
                isset($data['visible']) && $return['visible'] = $data['visible'];
                isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
                $return['options'] = $data;
            }
            (!isset($return['icon']) || $return['icon']) && $return['icon'] = 'fa fa-circle-o';
            $items && $return['items'] = $items;
            return $return;
        };
        echo \backend\components\Menu::widget([
            //'encodeLabels'=>false,
            'options'=>['class'=>'sidebar-menu'],
            'items'=>\mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id,null,$callback)
        ])
        ?>

    </section>

</aside>
