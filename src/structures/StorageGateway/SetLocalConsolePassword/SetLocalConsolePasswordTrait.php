<?php

namespace Sunaoka\Aws\Structures\StorageGateway\SetLocalConsolePassword;

trait SetLocalConsolePasswordTrait
{
    /**
     * @param SetLocalConsolePasswordRequest $args
     * @return SetLocalConsolePasswordResponse
     */
    public function setLocalConsolePassword(SetLocalConsolePasswordRequest $args)
    {
        $result = parent::setLocalConsolePassword($args->toArray());
        return new SetLocalConsolePasswordResponse($result->toArray());
    }
}
