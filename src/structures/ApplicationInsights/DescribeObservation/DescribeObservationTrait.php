<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeObservation;

trait DescribeObservationTrait
{
    /**
     * @param DescribeObservationRequest $args
     * @return DescribeObservationResponse
     */
    public function describeObservation(DescribeObservationRequest $args)
    {
        $result = parent::describeObservation($args->toArray());
        return new DescribeObservationResponse($result->toArray());
    }
}
