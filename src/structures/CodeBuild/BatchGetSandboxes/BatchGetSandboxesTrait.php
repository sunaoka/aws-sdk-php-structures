<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes;

trait BatchGetSandboxesTrait
{
    /**
     * @param BatchGetSandboxesRequest $args
     * @return BatchGetSandboxesResponse
     */
    public function batchGetSandboxes(BatchGetSandboxesRequest $args)
    {
        $result = parent::batchGetSandboxes($args->toArray());
        return new BatchGetSandboxesResponse($result->toArray());
    }
}
