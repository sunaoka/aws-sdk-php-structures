<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateAssetFile;

trait CreateAssetFileTrait
{
    /**
     * @param CreateAssetFileRequest $args
     * @return CreateAssetFileResponse
     */
    public function createAssetFile(CreateAssetFileRequest $args)
    {
        $result = parent::createAssetFile($args->toArray());
        return new CreateAssetFileResponse($result->toArray());
    }
}
