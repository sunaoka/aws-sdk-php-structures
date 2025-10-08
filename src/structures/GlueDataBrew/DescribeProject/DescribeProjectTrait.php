<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeProject;

trait DescribeProjectTrait
{
    /**
     * @param DescribeProjectRequest $args
     * @return DescribeProjectResponse
     */
    public function describeProject(DescribeProjectRequest $args)
    {
        $result = parent::describeProject($args->toArray());
        return new DescribeProjectResponse($result->toArray());
    }
}
