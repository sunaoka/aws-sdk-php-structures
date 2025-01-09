<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statistic
 */
class StatisticalThreshold extends Shape
{
    /**
     * @param array{statistic?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
