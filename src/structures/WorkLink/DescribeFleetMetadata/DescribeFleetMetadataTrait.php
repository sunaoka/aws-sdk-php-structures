<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeFleetMetadata;

trait DescribeFleetMetadataTrait
{
    /**
     * @param DescribeFleetMetadataRequest $args
     * @return DescribeFleetMetadataResponse
     */
    public function describeFleetMetadata(DescribeFleetMetadataRequest $args)
    {
        $result = parent::describeFleetMetadata($args->toArray());
        return new DescribeFleetMetadataResponse($result->toArray());
    }
}
