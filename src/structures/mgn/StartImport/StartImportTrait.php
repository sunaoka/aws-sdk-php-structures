<?php

namespace Sunaoka\Aws\Structures\mgn\StartImport;

trait StartImportTrait
{
    /**
     * @param StartImportRequest $args
     * @return StartImportResponse
     */
    public function startImport(StartImportRequest $args)
    {
        $result = parent::startImport($args->toArray());
        return new StartImportResponse($result->toArray());
    }
}
