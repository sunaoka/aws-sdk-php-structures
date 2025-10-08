<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages;

trait DescribeImagesTrait
{
    /**
     * @param DescribeImagesRequest $args
     * @return DescribeImagesResponse
     */
    public function describeImages(DescribeImagesRequest $args)
    {
        $result = parent::describeImages($args->toArray());
        return new DescribeImagesResponse($result->toArray());
    }
}
