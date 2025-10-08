<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassificationJobs;

trait ListDocumentClassificationJobsTrait
{
    /**
     * @param ListDocumentClassificationJobsRequest $args
     * @return ListDocumentClassificationJobsResponse
     */
    public function listDocumentClassificationJobs(ListDocumentClassificationJobsRequest $args)
    {
        $result = parent::listDocumentClassificationJobs($args->toArray());
        return new ListDocumentClassificationJobsResponse($result->toArray());
    }
}
