<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImage;

trait DescribeImageTrait
{
    /**
     * @param DescribeImageRequest $args
     * @return DescribeImageResponse
     */
    public function describeImage(DescribeImageRequest $args)
    {
        $result = parent::describeImage($args->toArray());
        return new DescribeImageResponse($result->toArray());
    }
}
