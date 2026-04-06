<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators;

trait DescribeAcceleratorsTrait
{
    /**
     * @param DescribeAcceleratorsRequest $args
     * @return DescribeAcceleratorsResponse
     */
    public function describeAccelerators(DescribeAcceleratorsRequest $args)
    {
        $result = parent::describeAccelerators($args->toArray());
        return new DescribeAcceleratorsResponse($result->toArray());
    }
}
