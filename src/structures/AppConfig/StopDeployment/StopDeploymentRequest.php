<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property int $DeploymentNumber
 * @property bool $AllowRevert
 */
class StopDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     DeploymentNumber: int,
     *     AllowRevert?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
