<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computeEnvironment
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property int|null $unmanagedvCpus
 * @property Shapes\ComputeResourceUpdate|null $computeResources
 * @property string|null $serviceRole
 * @property Shapes\UpdatePolicy|null $updatePolicy
 * @property string|null $context
 */
class UpdateComputeEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     computeEnvironment: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     unmanagedvCpus?: int|null,
     *     computeResources?: Shapes\ComputeResourceUpdate|null,
     *     serviceRole?: string|null,
     *     updatePolicy?: Shapes\UpdatePolicy|null,
     *     context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
