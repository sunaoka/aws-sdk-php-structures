<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetRandomPassword;

trait GetRandomPasswordTrait
{
    /**
     * @param GetRandomPasswordRequest $args
     * @return GetRandomPasswordResponse
     */
    public function getRandomPassword(GetRandomPasswordRequest $args)
    {
        $result = parent::getRandomPassword($args->toArray());
        return new GetRandomPasswordResponse($result->toArray());
    }
}
