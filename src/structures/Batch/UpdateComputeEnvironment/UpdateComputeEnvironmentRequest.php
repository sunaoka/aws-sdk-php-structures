<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computeEnvironment
 * @property 'ENABLED'|'DISABLED' $state
 * @property int $unmanagedvCpus
 * @property Shapes\ComputeResourceUpdate $computeResources
 * @property string $serviceRole
 * @property Shapes\UpdatePolicy $updatePolicy
 * @property string $context
 */
class UpdateComputeEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironment: string,
     *     state?: 'ENABLED'|'DISABLED',
     *     unmanagedvCpus?: int,
     *     computeResources?: Shapes\ComputeResourceUpdate,
     *     serviceRole?: string,
     *     updatePolicy?: Shapes\UpdatePolicy,
     *     context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
