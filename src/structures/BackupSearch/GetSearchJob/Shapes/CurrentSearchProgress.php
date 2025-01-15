<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RecoveryPointsScannedCount
 * @property int|null $ItemsScannedCount
 * @property int|null $ItemsMatchedCount
 */
class CurrentSearchProgress extends Shape
{
    /**
     * @param array{
     *     RecoveryPointsScannedCount?: int|null,
     *     ItemsScannedCount?: int|null,
     *     ItemsMatchedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
