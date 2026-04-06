<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageReferences;

trait DescribeImageReferencesTrait
{
    /**
     * @param DescribeImageReferencesRequest $args
     * @return DescribeImageReferencesResponse
     */
    public function describeImageReferences(DescribeImageReferencesRequest $args)
    {
        $result = parent::describeImageReferences($args->toArray());
        return new DescribeImageReferencesResponse($result->toArray());
    }
}
