<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteRegistrationCode;

trait DeleteRegistrationCodeTrait
{
    /**
     * @param DeleteRegistrationCodeRequest $args
     * @return DeleteRegistrationCodeResponse
     */
    public function deleteRegistrationCode(DeleteRegistrationCodeRequest $args)
    {
        $result = parent::deleteRegistrationCode($args->toArray());
        return new DeleteRegistrationCodeResponse($result->toArray());
    }
}
