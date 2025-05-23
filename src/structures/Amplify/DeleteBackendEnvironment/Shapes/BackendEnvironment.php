<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteBackendEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $backendEnvironmentArn
 * @property string $environmentName
 * @property string|null $stackName
 * @property string|null $deploymentArtifacts
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class BackendEnvironment extends Shape
{
    /**
     * @param array{
     *     backendEnvironmentArn: string,
     *     environmentName: string,
     *     stackName?: string|null,
     *     deploymentArtifacts?: string|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
