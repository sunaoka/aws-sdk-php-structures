<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Total
 * @property int|null $MemoryStore
 * @property int|null $MagneticStore
 */
class RecordsIngested extends Shape
{
    /**
     * @param array{
     *     Total?: int|null,
     *     MemoryStore?: int|null,
     *     MagneticStore?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
