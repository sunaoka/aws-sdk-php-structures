<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookImport;

trait StartNotebookImportTrait
{
    /**
     * @param StartNotebookImportRequest $args
     * @return StartNotebookImportResponse
     */
    public function startNotebookImport(StartNotebookImportRequest $args)
    {
        $result = parent::startNotebookImport($args->toArray());
        return new StartNotebookImportResponse($result->toArray());
    }
}
