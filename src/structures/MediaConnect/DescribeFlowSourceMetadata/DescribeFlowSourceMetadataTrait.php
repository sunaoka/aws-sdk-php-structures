<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata;

trait DescribeFlowSourceMetadataTrait
{
    /**
     * @param DescribeFlowSourceMetadataRequest $args
     * @return DescribeFlowSourceMetadataResponse
     */
    public function describeFlowSourceMetadata(DescribeFlowSourceMetadataRequest $args)
    {
        $result = parent::describeFlowSourceMetadata($args->toArray());
        return new DescribeFlowSourceMetadataResponse($result->toArray());
    }
}
