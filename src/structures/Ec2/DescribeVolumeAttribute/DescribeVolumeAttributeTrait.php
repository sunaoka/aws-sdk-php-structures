<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeAttribute;

trait DescribeVolumeAttributeTrait
{
    /**
     * @param DescribeVolumeAttributeRequest $args
     * @return DescribeVolumeAttributeResponse
     */
    public function describeVolumeAttribute(DescribeVolumeAttributeRequest $args)
    {
        $result = parent::describeVolumeAttribute($args->toArray());
        return new DescribeVolumeAttributeResponse($result->toArray());
    }
}
