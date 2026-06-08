<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeleteAssetFile;

trait DeleteAssetFileTrait
{
    /**
     * @param DeleteAssetFileRequest $args
     * @return DeleteAssetFileResponse
     */
    public function deleteAssetFile(DeleteAssetFileRequest $args)
    {
        $result = parent::deleteAssetFile($args->toArray());
        return new DeleteAssetFileResponse($result->toArray());
    }
}
