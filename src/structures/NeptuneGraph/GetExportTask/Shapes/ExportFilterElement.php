<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ExportFilterPropertyAttributes>|null $properties
 */
class ExportFilterElement extends Shape
{
    /**
     * @param array{properties?: array<string, ExportFilterPropertyAttributes>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
