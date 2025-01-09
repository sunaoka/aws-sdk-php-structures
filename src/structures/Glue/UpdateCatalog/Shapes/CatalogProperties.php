<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeAccessProperties $DataLakeAccessProperties
 * @property array<string, string> $CustomProperties
 */
class CatalogProperties extends Shape
{
    /**
     * @param array{
     *     DataLakeAccessProperties?: DataLakeAccessProperties,
     *     CustomProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
