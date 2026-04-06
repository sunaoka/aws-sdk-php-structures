<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2;

trait GetResourcesStatisticsV2Trait
{
    /**
     * @param GetResourcesStatisticsV2Request $args
     * @return GetResourcesStatisticsV2Response
     */
    public function getResourcesStatisticsV2(GetResourcesStatisticsV2Request $args)
    {
        $result = parent::getResourcesStatisticsV2($args->toArray());
        return new GetResourcesStatisticsV2Response($result->toArray());
    }
}
