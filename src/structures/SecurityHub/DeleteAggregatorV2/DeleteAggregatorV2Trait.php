<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteAggregatorV2;

trait DeleteAggregatorV2Trait
{
    /**
     * @param DeleteAggregatorV2Request $args
     * @return DeleteAggregatorV2Response
     */
    public function deleteAggregatorV2(DeleteAggregatorV2Request $args)
    {
        $result = parent::deleteAggregatorV2($args->toArray());
        return new DeleteAggregatorV2Response($result->toArray());
    }
}
