<?php

namespace Sunaoka\Aws\Structures\Kms\GetParametersForImport;

trait GetParametersForImportTrait
{
    /**
     * @param GetParametersForImportRequest $args
     * @return GetParametersForImportResponse
     */
    public function getParametersForImport(GetParametersForImportRequest $args)
    {
        $result = parent::getParametersForImport($args->toArray());
        return new GetParametersForImportResponse($result->toArray());
    }
}
