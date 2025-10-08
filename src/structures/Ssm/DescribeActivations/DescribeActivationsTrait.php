<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations;

trait DescribeActivationsTrait
{
    /**
     * @param DescribeActivationsRequest $args
     * @return DescribeActivationsResponse
     */
    public function describeActivations(DescribeActivationsRequest $args)
    {
        $result = parent::describeActivations($args->toArray());
        return new DescribeActivationsResponse($result->toArray());
    }
}
