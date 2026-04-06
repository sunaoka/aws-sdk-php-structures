<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue;

trait BatchGetSecretValueTrait
{
    /**
     * @param BatchGetSecretValueRequest $args
     * @return BatchGetSecretValueResponse
     */
    public function batchGetSecretValue(BatchGetSecretValueRequest $args)
    {
        $result = parent::batchGetSecretValue($args->toArray());
        return new BatchGetSecretValueResponse($result->toArray());
    }
}
