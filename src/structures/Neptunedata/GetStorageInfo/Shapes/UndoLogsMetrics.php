<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInBytes
 * @property int $listSize
 */
class UndoLogsMetrics extends Shape
{
    /**
     * @param array{
     *     sizeInBytes: int,
     *     listSize: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
