<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetFiles;

trait ListAssetFilesTrait
{
    /**
     * @param ListAssetFilesRequest $args
     * @return ListAssetFilesResponse
     */
    public function listAssetFiles(ListAssetFilesRequest $args)
    {
        $result = parent::listAssetFiles($args->toArray());
        return new ListAssetFilesResponse($result->toArray());
    }
}
