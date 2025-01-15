<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttackVolumeStatistics|null $BitsPerSecond
 * @property AttackVolumeStatistics|null $PacketsPerSecond
 * @property AttackVolumeStatistics|null $RequestsPerSecond
 */
class AttackVolume extends Shape
{
    /**
     * @param array{
     *     BitsPerSecond?: AttackVolumeStatistics|null,
     *     PacketsPerSecond?: AttackVolumeStatistics|null,
     *     RequestsPerSecond?: AttackVolumeStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
