<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookMetadata;

trait ListNotebookMetadataTrait
{
    /**
     * @param ListNotebookMetadataRequest $args
     * @return ListNotebookMetadataResponse
     */
    public function listNotebookMetadata(ListNotebookMetadataRequest $args)
    {
        $result = parent::listNotebookMetadata($args->toArray());
        return new ListNotebookMetadataResponse($result->toArray());
    }
}
