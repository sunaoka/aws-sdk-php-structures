<?php

namespace Sunaoka\Aws\Structures\AppRunner\PauseService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingConfigurationArn
 * @property string $AutoScalingConfigurationName
 * @property int $AutoScalingConfigurationRevision
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property bool $HasAssociatedService
 * @property bool $IsDefault
 */
class AutoScalingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn?: string,
     *     AutoScalingConfigurationName?: string,
     *     AutoScalingConfigurationRevision?: int,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     HasAssociatedService?: bool,
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
