<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImportFailures;

trait ListImportFailuresTrait
{
    /**
     * @param ListImportFailuresRequest $args
     * @return ListImportFailuresResponse
     */
    public function listImportFailures(ListImportFailuresRequest $args)
    {
        $result = parent::listImportFailures($args->toArray());
        return new ListImportFailuresResponse($result->toArray());
    }
}
