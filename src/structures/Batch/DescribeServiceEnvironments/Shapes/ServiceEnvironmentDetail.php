<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceEnvironmentName
 * @property string $serviceEnvironmentArn
 * @property 'SAGEMAKER_TRAINING' $serviceEnvironmentType
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null $status
 * @property list<CapacityLimit> $capacityLimits
 * @property array<string, string>|null $tags
 */
class ServiceEnvironmentDetail extends Shape
{
    /**
     * @param array{
     *     serviceEnvironmentName: string,
     *     serviceEnvironmentArn: string,
     *     serviceEnvironmentType: 'SAGEMAKER_TRAINING',
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     status?: 'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'VALID'|'INVALID'|null,
     *     capacityLimits: list<CapacityLimit>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
