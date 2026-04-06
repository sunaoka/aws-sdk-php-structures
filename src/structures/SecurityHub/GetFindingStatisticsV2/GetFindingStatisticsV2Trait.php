<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2;

trait GetFindingStatisticsV2Trait
{
    /**
     * @param GetFindingStatisticsV2Request $args
     * @return GetFindingStatisticsV2Response
     */
    public function getFindingStatisticsV2(GetFindingStatisticsV2Request $args)
    {
        $result = parent::getFindingStatisticsV2($args->toArray());
        return new GetFindingStatisticsV2Response($result->toArray());
    }
}
