<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteBuildBatch;

trait DeleteBuildBatchTrait
{
    /**
     * @param DeleteBuildBatchRequest $args
     * @return DeleteBuildBatchResponse
     */
    public function deleteBuildBatch(DeleteBuildBatchRequest $args)
    {
        $result = parent::deleteBuildBatch($args->toArray());
        return new DeleteBuildBatchResponse($result->toArray());
    }
}
