<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstance;

trait DescribeApplicationInstanceTrait
{
    /**
     * @param DescribeApplicationInstanceRequest $args
     * @return DescribeApplicationInstanceResponse
     */
    public function describeApplicationInstance(DescribeApplicationInstanceRequest $args)
    {
        $result = parent::describeApplicationInstance($args->toArray());
        return new DescribeApplicationInstanceResponse($result->toArray());
    }
}
