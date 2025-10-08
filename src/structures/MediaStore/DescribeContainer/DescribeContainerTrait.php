<?php

namespace Sunaoka\Aws\Structures\MediaStore\DescribeContainer;

trait DescribeContainerTrait
{
    /**
     * @param DescribeContainerRequest $args
     * @return DescribeContainerResponse
     */
    public function describeContainer(DescribeContainerRequest $args)
    {
        $result = parent::describeContainer($args->toArray());
        return new DescribeContainerResponse($result->toArray());
    }
}
