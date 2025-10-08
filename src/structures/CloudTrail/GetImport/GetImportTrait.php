<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetImport;

trait GetImportTrait
{
    /**
     * @param GetImportRequest $args
     * @return GetImportResponse
     */
    public function getImport(GetImportRequest $args)
    {
        $result = parent::getImport($args->toArray());
        return new GetImportResponse($result->toArray());
    }
}
