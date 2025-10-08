<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDocumentClassificationJob;

trait StartDocumentClassificationJobTrait
{
    /**
     * @param StartDocumentClassificationJobRequest $args
     * @return StartDocumentClassificationJobResponse
     */
    public function startDocumentClassificationJob(StartDocumentClassificationJobRequest $args)
    {
        $result = parent::startDocumentClassificationJob($args->toArray());
        return new StartDocumentClassificationJobResponse($result->toArray());
    }
}
