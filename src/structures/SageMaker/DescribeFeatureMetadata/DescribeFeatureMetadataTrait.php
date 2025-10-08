<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureMetadata;

trait DescribeFeatureMetadataTrait
{
    /**
     * @param DescribeFeatureMetadataRequest $args
     * @return DescribeFeatureMetadataResponse
     */
    public function describeFeatureMetadata(DescribeFeatureMetadataRequest $args)
    {
        $result = parent::describeFeatureMetadata($args->toArray());
        return new DescribeFeatureMetadataResponse($result->toArray());
    }
}
