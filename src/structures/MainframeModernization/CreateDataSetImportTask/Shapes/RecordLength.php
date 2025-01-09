<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $max
 * @property int $min
 */
class RecordLength extends Shape
{
    /**
     * @param array{
     *     max: int,
     *     min: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
