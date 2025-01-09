<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttackVolumeStatistics $BitsPerSecond
 * @property AttackVolumeStatistics $PacketsPerSecond
 * @property AttackVolumeStatistics $RequestsPerSecond
 */
class AttackVolume extends Shape
{
    /**
     * @param array{
     *     BitsPerSecond?: AttackVolumeStatistics,
     *     PacketsPerSecond?: AttackVolumeStatistics,
     *     RequestsPerSecond?: AttackVolumeStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
