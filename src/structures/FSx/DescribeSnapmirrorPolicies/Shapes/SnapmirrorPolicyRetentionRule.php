<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 * @property int<1, 1019> $Count
 * @property string|null $CreationSchedule
 */
class SnapmirrorPolicyRetentionRule extends Shape
{
    /**
     * @param array{
     *     Label: string,
     *     Count: int<1, 1019>,
     *     CreationSchedule?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
