<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateNotebookMetadata;

trait UpdateNotebookMetadataTrait
{
    /**
     * @param UpdateNotebookMetadataRequest $args
     * @return UpdateNotebookMetadataResponse
     */
    public function updateNotebookMetadata(UpdateNotebookMetadataRequest $args)
    {
        $result = parent::updateNotebookMetadata($args->toArray());
        return new UpdateNotebookMetadataResponse($result->toArray());
    }
}
