<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAuthCode;

trait CreateAuthCodeTrait
{
    /**
     * @param CreateAuthCodeRequest $args
     * @return CreateAuthCodeResponse
     */
    public function createAuthCode(CreateAuthCodeRequest $args)
    {
        $result = parent::createAuthCode($args->toArray());
        return new CreateAuthCodeResponse($result->toArray());
    }
}
