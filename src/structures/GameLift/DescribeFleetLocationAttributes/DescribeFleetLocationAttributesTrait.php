<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

trait DescribeFleetLocationAttributesTrait
{
    /**
     * @param DescribeFleetLocationAttributesRequest $args
     * @return DescribeFleetLocationAttributesResponse
     */
    public function describeFleetLocationAttributes(DescribeFleetLocationAttributesRequest $args)
    {
        $result = parent::describeFleetLocationAttributes($args->toArray());
        return new DescribeFleetLocationAttributesResponse($result->toArray());
    }
}
