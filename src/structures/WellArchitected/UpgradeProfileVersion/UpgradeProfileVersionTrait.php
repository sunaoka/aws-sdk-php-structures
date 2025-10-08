<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeProfileVersion;

trait UpgradeProfileVersionTrait
{
    /**
     * @param UpgradeProfileVersionRequest $args
     * @return void
     */
    public function upgradeProfileVersion(UpgradeProfileVersionRequest $args)
    {
        parent::upgradeProfileVersion($args->toArray());
    }
}
