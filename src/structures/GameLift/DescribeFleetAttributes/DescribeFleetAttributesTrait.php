<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetAttributes;

trait DescribeFleetAttributesTrait
{
    /**
     * @param DescribeFleetAttributesRequest $args
     * @return DescribeFleetAttributesResponse
     */
    public function describeFleetAttributes(DescribeFleetAttributesRequest $args)
    {
        $result = parent::describeFleetAttributes($args->toArray());
        return new DescribeFleetAttributesResponse($result->toArray());
    }
}
