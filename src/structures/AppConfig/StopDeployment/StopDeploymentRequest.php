<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property int $DeploymentNumber
 * @property bool|null $AllowRevert
 */
class StopDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     DeploymentNumber: int,
     *     AllowRevert?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
