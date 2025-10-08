<?php

namespace Sunaoka\Aws\Structures\Athena\ImportNotebook;

trait ImportNotebookTrait
{
    /**
     * @param ImportNotebookRequest $args
     * @return ImportNotebookResponse
     */
    public function importNotebook(ImportNotebookRequest $args)
    {
        $result = parent::importNotebook($args->toArray());
        return new ImportNotebookResponse($result->toArray());
    }
}
