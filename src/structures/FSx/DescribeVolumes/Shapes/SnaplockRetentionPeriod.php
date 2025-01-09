<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetentionPeriod $DefaultRetention
 * @property RetentionPeriod $MinimumRetention
 * @property RetentionPeriod $MaximumRetention
 */
class SnaplockRetentionPeriod extends Shape
{
    /**
     * @param array{
     *     DefaultRetention: RetentionPeriod,
     *     MinimumRetention: RetentionPeriod,
     *     MaximumRetention: RetentionPeriod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
