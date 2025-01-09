<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttackVolume $AttackVolume
 * @property int $AttackCount
 */
class AttackStatisticsDataItem extends Shape
{
    /**
     * @param array{
     *     AttackVolume?: AttackVolume,
     *     AttackCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
