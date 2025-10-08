<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetSecretValue;

trait GetSecretValueTrait
{
    /**
     * @param GetSecretValueRequest $args
     * @return GetSecretValueResponse
     */
    public function getSecretValue(GetSecretValueRequest $args)
    {
        $result = parent::getSecretValue($args->toArray());
        return new GetSecretValueResponse($result->toArray());
    }
}
