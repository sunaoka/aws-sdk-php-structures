<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ExportFilterPropertyAttributes> $properties
 */
class ExportFilterElement extends Shape
{
    /**
     * @param array{properties?: array<string, ExportFilterPropertyAttributes>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
