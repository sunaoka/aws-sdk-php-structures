<?php

namespace Sunaoka\Aws\Structures\Iot\GetRegistrationCode;

trait GetRegistrationCodeTrait
{
    /**
     * @param GetRegistrationCodeRequest $args
     * @return GetRegistrationCodeResponse
     */
    public function getRegistrationCode(GetRegistrationCodeRequest $args)
    {
        $result = parent::getRegistrationCode($args->toArray());
        return new GetRegistrationCodeResponse($result->toArray());
    }
}
