<?php

namespace Sunaoka\Aws\Structures\Athena\ExportNotebook;

trait ExportNotebookTrait
{
    /**
     * @param ExportNotebookRequest $args
     * @return ExportNotebookResponse
     */
    public function exportNotebook(ExportNotebookRequest $args)
    {
        $result = parent::exportNotebook($args->toArray());
        return new ExportNotebookResponse($result->toArray());
    }
}
