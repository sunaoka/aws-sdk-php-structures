<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareStatisticsV2;

trait GetSoftwareStatisticsV2Trait
{
    /**
     * @param GetSoftwareStatisticsV2Request $args
     * @return GetSoftwareStatisticsV2Response
     */
    public function getSoftwareStatisticsV2(GetSoftwareStatisticsV2Request $args)
    {
        $result = parent::getSoftwareStatisticsV2($args->toArray());
        return new GetSoftwareStatisticsV2Response($result->toArray());
    }
}
