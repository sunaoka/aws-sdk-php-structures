<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computeEnvironmentName
 * @property 'MANAGED'|'UNMANAGED' $type
 * @property 'ENABLED'|'DISABLED' $state
 * @property int $unmanagedvCpus
 * @property Shapes\ComputeResource $computeResources
 * @property string $serviceRole
 * @property array<string, string> $tags
 * @property Shapes\EksConfiguration $eksConfiguration
 * @property string $context
 */
class CreateComputeEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironmentName: string,
     *     type: 'MANAGED'|'UNMANAGED',
     *     state?: 'ENABLED'|'DISABLED',
     *     unmanagedvCpus?: int,
     *     computeResources?: Shapes\ComputeResource,
     *     serviceRole?: string,
     *     tags?: array<string, string>,
     *     eksConfiguration?: Shapes\EksConfiguration,
     *     context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
