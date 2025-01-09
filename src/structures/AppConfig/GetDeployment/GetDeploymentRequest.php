<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EnvironmentId
 * @property int $DeploymentNumber
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EnvironmentId: string,
     *     DeploymentNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
