<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttackVolume|null $AttackVolume
 * @property int $AttackCount
 */
class AttackStatisticsDataItem extends Shape
{
    /**
     * @param array{
     *     AttackVolume?: AttackVolume|null,
     *     AttackCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
