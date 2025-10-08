<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch;

trait StopBuildBatchTrait
{
    /**
     * @param StopBuildBatchRequest $args
     * @return StopBuildBatchResponse
     */
    public function stopBuildBatch(StopBuildBatchRequest $args)
    {
        $result = parent::stopBuildBatch($args->toArray());
        return new StopBuildBatchResponse($result->toArray());
    }
}
