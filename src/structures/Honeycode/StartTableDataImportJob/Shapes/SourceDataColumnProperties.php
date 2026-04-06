<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $columnIndex
 */
class SourceDataColumnProperties extends Shape
{
    /**
     * @param array{columnIndex?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
