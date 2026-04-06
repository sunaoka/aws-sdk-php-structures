<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity;

trait BatchGetJobEntityTrait
{
    /**
     * @param BatchGetJobEntityRequest $args
     * @return BatchGetJobEntityResponse
     */
    public function batchGetJobEntity(BatchGetJobEntityRequest $args)
    {
        $result = parent::batchGetJobEntity($args->toArray());
        return new BatchGetJobEntityResponse($result->toArray());
    }
}
