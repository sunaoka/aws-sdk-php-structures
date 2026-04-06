<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingConfigurationArn
 * @property string|null $AutoScalingConfigurationName
 * @property int|null $AutoScalingConfigurationRevision
 */
class AutoScalingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn?: string|null,
     *     AutoScalingConfigurationName?: string|null,
     *     AutoScalingConfigurationRevision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
