<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableSerialConsoleAccess;

trait EnableSerialConsoleAccessTrait
{
    /**
     * @param EnableSerialConsoleAccessRequest $args
     * @return EnableSerialConsoleAccessResponse
     */
    public function enableSerialConsoleAccess(EnableSerialConsoleAccessRequest $args)
    {
        $result = parent::enableSerialConsoleAccess($args->toArray());
        return new EnableSerialConsoleAccessResponse($result->toArray());
    }
}
