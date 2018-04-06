<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <a href="#">
            <div class="card-header" data-background-color="grey">
                <i class="mdi mdi-settings mdi-24px"></i>
            </div>
        </a>
        <div class="card-content">
            <p class="category">Installed Modules</p>
            <h3 class="title"><?= count($db->getModules()) - 1 ?></h3>
            <?php
            $includeables = 0;
            $interfacefiles = 0;
            $navs = 0;
            foreach ($db->getModules() as $module) {
                if ($module->getName() != "Module Manager") {
                    $includeables += count($module->getIncludeables());
                    $interfacefiles += count($module->getDashboards());
                    $navs += count($module->getNavs());
                }
            }
            ?>
        </div>
        <div class="card-footer">
            <div class="stats">
                <p><i class="mdi mdi-clock mdi-24px"></i> Includeables: <?= $includeables ?> <br>
                    <i class="mdi mdi-clock mdi-24px"></i> Dashboard Files: <?= $interfacefiles ?> <br>
                    <i class="mdi mdi-clock mdi-24px"></i> Navbar Links: <?= $navs ?></p> <br>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <a href="#">
            <div class="card-header" data-background-color="grey">
                <i class="mdi mdi-settings mdi-24px"></i>
            </div>
        </a>
        <div class="card-content">
            <p class="category">Installed Modules</p>
            <h3 class="title"><?= count($db->getModules()) - 1 ?></h3>
            <?php
            $includeables = 0;
            $interfacefiles = 0;
            $navs = 0;
            foreach ($db->getModules() as $module) {
                if ($module->getName() != "Module Manager") {
                    $includeables += count($module->getIncludeables());
                    $interfacefiles += count($module->getDashboards());
                    $navs += count($module->getNavs());
                }
            }
            ?>
        </div>
        <div class="card-footer">
            <div class="stats">
                <p><i class="mdi mdi-clock mdi-24px"></i> Includeables: <?= $includeables ?> <br>
                    <i class="mdi mdi-clock mdi-24px"></i> Dashboard Files: <?= $interfacefiles ?> <br>
                    <i class="mdi mdi-clock mdi-24px"></i> Navbar Links: <?= $navs ?></p> <br>
            </div>
        </div>
    </div>
</div>
