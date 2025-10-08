<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDeviceThumbnail;

trait DescribeInputDeviceThumbnailTrait
{
    /**
     * @param DescribeInputDeviceThumbnailRequest $args
     * @return DescribeInputDeviceThumbnailResponse
     */
    public function describeInputDeviceThumbnail(DescribeInputDeviceThumbnailRequest $args)
    {
        $result = parent::describeInputDeviceThumbnail($args->toArray());
        return new DescribeInputDeviceThumbnailResponse($result->toArray());
    }
}
