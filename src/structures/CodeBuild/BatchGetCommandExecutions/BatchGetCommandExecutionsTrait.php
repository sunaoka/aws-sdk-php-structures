<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetCommandExecutions;

trait BatchGetCommandExecutionsTrait
{
    /**
     * @param BatchGetCommandExecutionsRequest $args
     * @return BatchGetCommandExecutionsResponse
     */
    public function batchGetCommandExecutions(BatchGetCommandExecutionsRequest $args)
    {
        $result = parent::batchGetCommandExecutions($args->toArray());
        return new BatchGetCommandExecutionsResponse($result->toArray());
    }
}
