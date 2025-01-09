<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RecoveryPointsScannedCount
 * @property int $ItemsScannedCount
 * @property int $ItemsMatchedCount
 */
class CurrentSearchProgress extends Shape
{
    /**
     * @param array{
     *     RecoveryPointsScannedCount?: int,
     *     ItemsScannedCount?: int,
     *     ItemsMatchedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
