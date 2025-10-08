<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch;

trait StartBuildBatchTrait
{
    /**
     * @param StartBuildBatchRequest $args
     * @return StartBuildBatchResponse
     */
    public function startBuildBatch(StartBuildBatchRequest $args)
    {
        $result = parent::startBuildBatch($args->toArray());
        return new StartBuildBatchResponse($result->toArray());
    }
}
