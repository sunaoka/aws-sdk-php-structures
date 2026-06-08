<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssetFile;

trait GetAssetFileTrait
{
    /**
     * @param GetAssetFileRequest $args
     * @return GetAssetFileResponse
     */
    public function getAssetFile(GetAssetFileRequest $args)
    {
        $result = parent::getAssetFile($args->toArray());
        return new GetAssetFileResponse($result->toArray());
    }
}
