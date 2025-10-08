<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors;

trait ListExportErrorsTrait
{
    /**
     * @param ListExportErrorsRequest $args
     * @return ListExportErrorsResponse
     */
    public function listExportErrors(ListExportErrorsRequest $args)
    {
        $result = parent::listExportErrors($args->toArray());
        return new ListExportErrorsResponse($result->toArray());
    }
}
