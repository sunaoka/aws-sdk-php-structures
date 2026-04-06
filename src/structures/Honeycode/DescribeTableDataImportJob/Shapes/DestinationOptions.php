<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, SourceDataColumnProperties>|null $columnMap
 */
class DestinationOptions extends Shape
{
    /**
     * @param array{columnMap?: array<string, SourceDataColumnProperties>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
