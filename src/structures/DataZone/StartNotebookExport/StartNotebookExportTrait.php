<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookExport;

trait StartNotebookExportTrait
{
    /**
     * @param StartNotebookExportRequest $args
     * @return StartNotebookExportResponse
     */
    public function startNotebookExport(StartNotebookExportRequest $args)
    {
        $result = parent::startNotebookExport($args->toArray());
        return new StartNotebookExportResponse($result->toArray());
    }
}
