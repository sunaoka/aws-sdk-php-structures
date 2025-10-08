<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2;

trait GetMetricDataV2Trait
{
    /**
     * @param GetMetricDataV2Request $args
     * @return GetMetricDataV2Response
     */
    public function getMetricDataV2(GetMetricDataV2Request $args)
    {
        $result = parent::getMetricDataV2($args->toArray());
        return new GetMetricDataV2Response($result->toArray());
    }
}
