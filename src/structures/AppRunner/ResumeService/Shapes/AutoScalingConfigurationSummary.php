<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingConfigurationArn
 * @property string|null $AutoScalingConfigurationName
 * @property int|null $AutoScalingConfigurationRevision
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property bool|null $HasAssociatedService
 * @property bool|null $IsDefault
 */
class AutoScalingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn?: string|null,
     *     AutoScalingConfigurationName?: string|null,
     *     AutoScalingConfigurationRevision?: int|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     HasAssociatedService?: bool|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
