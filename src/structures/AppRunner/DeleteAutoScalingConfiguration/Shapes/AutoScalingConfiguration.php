<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteAutoScalingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingConfigurationArn
 * @property string|null $AutoScalingConfigurationName
 * @property int|null $AutoScalingConfigurationRevision
 * @property bool|null $Latest
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property int|null $MaxConcurrency
 * @property int|null $MinSize
 * @property int|null $MaxSize
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $DeletedAt
 * @property bool|null $HasAssociatedService
 * @property bool|null $IsDefault
 */
class AutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn?: string|null,
     *     AutoScalingConfigurationName?: string|null,
     *     AutoScalingConfigurationRevision?: int|null,
     *     Latest?: bool|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     MaxConcurrency?: int|null,
     *     MinSize?: int|null,
     *     MaxSize?: int|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DeletedAt?: \Aws\Api\DateTimeResult|null,
     *     HasAssociatedService?: bool|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
