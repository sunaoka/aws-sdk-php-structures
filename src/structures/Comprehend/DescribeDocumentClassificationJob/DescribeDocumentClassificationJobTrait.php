<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassificationJob;

trait DescribeDocumentClassificationJobTrait
{
    /**
     * @param DescribeDocumentClassificationJobRequest $args
     * @return DescribeDocumentClassificationJobResponse
     */
    public function describeDocumentClassificationJob(DescribeDocumentClassificationJobRequest $args)
    {
        $result = parent::describeDocumentClassificationJob($args->toArray());
        return new DescribeDocumentClassificationJobResponse($result->toArray());
    }
}
