<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects;

trait DescribeProjectsTrait
{
    /**
     * @param DescribeProjectsRequest $args
     * @return DescribeProjectsResponse
     */
    public function describeProjects(DescribeProjectsRequest $args)
    {
        $result = parent::describeProjects($args->toArray());
        return new DescribeProjectsResponse($result->toArray());
    }
}
