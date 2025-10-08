<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStudio;

trait DescribeStudioTrait
{
    /**
     * @param DescribeStudioRequest $args
     * @return DescribeStudioResponse
     */
    public function describeStudio(DescribeStudioRequest $args)
    {
        $result = parent::describeStudio($args->toArray());
        return new DescribeStudioResponse($result->toArray());
    }
}
