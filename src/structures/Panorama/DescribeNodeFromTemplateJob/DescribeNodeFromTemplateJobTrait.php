<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNodeFromTemplateJob;

trait DescribeNodeFromTemplateJobTrait
{
    /**
     * @param DescribeNodeFromTemplateJobRequest $args
     * @return DescribeNodeFromTemplateJobResponse
     */
    public function describeNodeFromTemplateJob(DescribeNodeFromTemplateJobRequest $args)
    {
        $result = parent::describeNodeFromTemplateJob($args->toArray());
        return new DescribeNodeFromTemplateJobResponse($result->toArray());
    }
}
