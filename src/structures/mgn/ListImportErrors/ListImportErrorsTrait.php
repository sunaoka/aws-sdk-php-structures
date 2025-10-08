<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors;

trait ListImportErrorsTrait
{
    /**
     * @param ListImportErrorsRequest $args
     * @return ListImportErrorsResponse
     */
    public function listImportErrors(ListImportErrorsRequest $args)
    {
        $result = parent::listImportErrors($args->toArray());
        return new ListImportErrorsResponse($result->toArray());
    }
}
