<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSerialConsoleAccessStatus;

trait GetSerialConsoleAccessStatusTrait
{
    /**
     * @param GetSerialConsoleAccessStatusRequest $args
     * @return GetSerialConsoleAccessStatusResponse
     */
    public function getSerialConsoleAccessStatus(GetSerialConsoleAccessStatusRequest $args)
    {
        $result = parent::getSerialConsoleAccessStatus($args->toArray());
        return new GetSerialConsoleAccessStatusResponse($result->toArray());
    }
}
