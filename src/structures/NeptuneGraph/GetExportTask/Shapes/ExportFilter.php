<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ExportFilterElement>|null $vertexFilter
 * @property array<string, ExportFilterElement>|null $edgeFilter
 */
class ExportFilter extends Shape
{
    /**
     * @param array{
     *     vertexFilter?: array<string, ExportFilterElement>|null,
     *     edgeFilter?: array<string, ExportFilterElement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
