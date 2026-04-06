<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computeEnvironmentName
 * @property 'MANAGED'|'UNMANAGED' $type
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property int|null $unmanagedvCpus
 * @property Shapes\ComputeResource|null $computeResources
 * @property string|null $serviceRole
 * @property array<string, string>|null $tags
 * @property Shapes\EksConfiguration|null $eksConfiguration
 * @property string|null $context
 */
class CreateComputeEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironmentName: string,
     *     type: 'MANAGED'|'UNMANAGED',
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     unmanagedvCpus?: int|null,
     *     computeResources?: Shapes\ComputeResource|null,
     *     serviceRole?: string|null,
     *     tags?: array<string, string>|null,
     *     eksConfiguration?: Shapes\EksConfiguration|null,
     *     context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
