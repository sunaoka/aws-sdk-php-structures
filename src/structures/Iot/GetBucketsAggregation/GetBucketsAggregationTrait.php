<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation;

trait GetBucketsAggregationTrait
{
    /**
     * @param GetBucketsAggregationRequest $args
     * @return GetBucketsAggregationResponse
     */
    public function getBucketsAggregation(GetBucketsAggregationRequest $args)
    {
        $result = parent::getBucketsAggregation($args->toArray());
        return new GetBucketsAggregationResponse($result->toArray());
    }
}
