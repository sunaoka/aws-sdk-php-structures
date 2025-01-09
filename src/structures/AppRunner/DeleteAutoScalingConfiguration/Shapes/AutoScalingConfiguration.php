<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteAutoScalingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingConfigurationArn
 * @property string $AutoScalingConfigurationName
 * @property int $AutoScalingConfigurationRevision
 * @property bool $Latest
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property int $MaxConcurrency
 * @property int $MinSize
 * @property int $MaxSize
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $DeletedAt
 * @property bool $HasAssociatedService
 * @property bool $IsDefault
 */
class AutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn?: string,
     *     AutoScalingConfigurationName?: string,
     *     AutoScalingConfigurationRevision?: int,
     *     Latest?: bool,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     MaxConcurrency?: int,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult,
     *     HasAssociatedService?: bool,
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
