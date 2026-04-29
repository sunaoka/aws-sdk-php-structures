<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupPortMappings;

trait DescribeContainerGroupPortMappingsTrait
{
    /**
     * @param DescribeContainerGroupPortMappingsRequest $args
     * @return DescribeContainerGroupPortMappingsResponse
     */
    public function describeContainerGroupPortMappings(DescribeContainerGroupPortMappingsRequest $args)
    {
        $result = parent::describeContainerGroupPortMappings($args->toArray());
        return new DescribeContainerGroupPortMappingsResponse($result->toArray());
    }
}
