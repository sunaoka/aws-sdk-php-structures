<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookExport;

trait GetNotebookExportTrait
{
    /**
     * @param GetNotebookExportRequest $args
     * @return GetNotebookExportResponse
     */
    public function getNotebookExport(GetNotebookExportRequest $args)
    {
        $result = parent::getNotebookExport($args->toArray());
        return new GetNotebookExportResponse($result->toArray());
    }
}
