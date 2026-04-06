<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSelfUpgradeConfiguration;

trait DescribeSelfUpgradeConfigurationTrait
{
    /**
     * @param DescribeSelfUpgradeConfigurationRequest $args
     * @return DescribeSelfUpgradeConfigurationResponse
     */
    public function describeSelfUpgradeConfiguration(DescribeSelfUpgradeConfigurationRequest $args)
    {
        $result = parent::describeSelfUpgradeConfiguration($args->toArray());
        return new DescribeSelfUpgradeConfigurationResponse($result->toArray());
    }
}
