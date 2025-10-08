<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ResetUserPassword;

trait ResetUserPasswordTrait
{
    /**
     * @param ResetUserPasswordRequest $args
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword(ResetUserPasswordRequest $args)
    {
        $result = parent::resetUserPassword($args->toArray());
        return new ResetUserPasswordResponse($result->toArray());
    }
}
