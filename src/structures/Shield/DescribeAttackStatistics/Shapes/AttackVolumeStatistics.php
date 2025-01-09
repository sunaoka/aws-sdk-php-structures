<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Max
 */
class AttackVolumeStatistics extends Shape
{
    /**
     * @param array{Max: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
