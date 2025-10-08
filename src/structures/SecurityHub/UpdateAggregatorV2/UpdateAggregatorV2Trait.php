<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateAggregatorV2;

trait UpdateAggregatorV2Trait
{
    /**
     * @param UpdateAggregatorV2Request $args
     * @return UpdateAggregatorV2Response
     */
    public function updateAggregatorV2(UpdateAggregatorV2Request $args)
    {
        $result = parent::updateAggregatorV2($args->toArray());
        return new UpdateAggregatorV2Response($result->toArray());
    }
}
