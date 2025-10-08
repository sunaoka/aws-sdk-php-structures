<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDICOMImportJobs;

trait ListDICOMImportJobsTrait
{
    /**
     * @param ListDICOMImportJobsRequest $args
     * @return ListDICOMImportJobsResponse
     */
    public function listDICOMImportJobs(ListDICOMImportJobsRequest $args)
    {
        $result = parent::listDICOMImportJobs($args->toArray());
        return new ListDICOMImportJobsResponse($result->toArray());
    }
}
