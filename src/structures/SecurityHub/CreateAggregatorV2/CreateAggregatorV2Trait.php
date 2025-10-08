<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAggregatorV2;

trait CreateAggregatorV2Trait
{
    /**
     * @param CreateAggregatorV2Request $args
     * @return CreateAggregatorV2Response
     */
    public function createAggregatorV2(CreateAggregatorV2Request $args)
    {
        $result = parent::createAggregatorV2($args->toArray());
        return new CreateAggregatorV2Response($result->toArray());
    }
}
