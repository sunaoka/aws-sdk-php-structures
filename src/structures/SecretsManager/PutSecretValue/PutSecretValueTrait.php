<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutSecretValue;

trait PutSecretValueTrait
{
    /**
     * @param PutSecretValueRequest $args
     * @return PutSecretValueResponse
     */
    public function putSecretValue(PutSecretValueRequest $args)
    {
        $result = parent::putSecretValue($args->toArray());
        return new PutSecretValueResponse($result->toArray());
    }
}
