<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableSerialConsoleAccess;

trait DisableSerialConsoleAccessTrait
{
    /**
     * @param DisableSerialConsoleAccessRequest $args
     * @return DisableSerialConsoleAccessResponse
     */
    public function disableSerialConsoleAccess(DisableSerialConsoleAccessRequest $args)
    {
        $result = parent::disableSerialConsoleAccess($args->toArray());
        return new DisableSerialConsoleAccessResponse($result->toArray());
    }
}
