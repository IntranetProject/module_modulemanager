<div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="card card-stats bg-light">
        <div class="card-body">
            <p class="category card-title">Installed Modules</p>
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
                <p>
                    <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Includeables: <?= $includeables ?></a> <br>
                    <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Dashboard Files: <?= $interfacefiles ?></a> <br>
                    <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Navbar Links: <?= $navs ?></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="card card-stats bg-light">
        <div class="card-body">
            <p class="category card-title">Installed Modules</p>
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
            <div class="stats"></div>
            <p>
                <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Includeables: <?= $includeables ?></a> <br>
                <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Dashboard Files: <?= $interfacefiles ?></a> <br>
                <a href="#"><i class="mdi mdi-clock mdi-24px"></i> Navbar Links: <?= $navs ?></a>
            </p>
        </div>
    </div>
</div>
</div>
