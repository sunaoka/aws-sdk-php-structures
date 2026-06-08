<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssetFile;

trait UpdateAssetFileTrait
{
    /**
     * @param UpdateAssetFileRequest $args
     * @return UpdateAssetFileResponse
     */
    public function updateAssetFile(UpdateAssetFileRequest $args)
    {
        $result = parent::updateAssetFile($args->toArray());
        return new UpdateAssetFileResponse($result->toArray());
    }
}
