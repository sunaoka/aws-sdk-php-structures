<?php

namespace Sunaoka\Aws\Structures\Batch\CreateServiceEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceEnvironmentName
 * @property 'SAGEMAKER_TRAINING' $serviceEnvironmentType
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property list<Shapes\CapacityLimit> $capacityLimits
 * @property array<string, string>|null $tags
 */
class CreateServiceEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     serviceEnvironmentName: string,
     *     serviceEnvironmentType: 'SAGEMAKER_TRAINING',
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     capacityLimits: list<Shapes\CapacityLimit>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
