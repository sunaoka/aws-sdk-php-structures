<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property string $condition
 */
class ExportFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>,
     *     condition: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
