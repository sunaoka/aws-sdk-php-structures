<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAggregatorV2;

trait GetAggregatorV2Trait
{
    /**
     * @param GetAggregatorV2Request $args
     * @return GetAggregatorV2Response
     */
    public function getAggregatorV2(GetAggregatorV2Request $args)
    {
        $result = parent::getAggregatorV2($args->toArray());
        return new GetAggregatorV2Response($result->toArray());
    }
}
