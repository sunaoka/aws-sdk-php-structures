<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Total
 * @property int $MemoryStore
 * @property int $MagneticStore
 */
class RecordsIngested extends Shape
{
    /**
     * @param array{
     *     Total?: int,
     *     MemoryStore?: int,
     *     MagneticStore?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
