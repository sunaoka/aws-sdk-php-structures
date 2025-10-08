<?php

namespace Sunaoka\Aws\Structures\Athena\GetNotebookMetadata;

trait GetNotebookMetadataTrait
{
    /**
     * @param GetNotebookMetadataRequest $args
     * @return GetNotebookMetadataResponse
     */
    public function getNotebookMetadata(GetNotebookMetadataRequest $args)
    {
        $result = parent::getNotebookMetadata($args->toArray());
        return new GetNotebookMetadataResponse($result->toArray());
    }
}
