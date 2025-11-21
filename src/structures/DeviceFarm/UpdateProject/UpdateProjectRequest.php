<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property int|null $defaultJobTimeoutMinutes
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property list<Shapes\EnvironmentVariable>|null $environmentVariables
 * @property string|null $executionRoleArn
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     defaultJobTimeoutMinutes?: int|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     environmentVariables?: list<Shapes\EnvironmentVariable>|null,
     *     executionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
