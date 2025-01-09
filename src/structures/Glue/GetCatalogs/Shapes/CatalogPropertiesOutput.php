<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeAccessPropertiesOutput $DataLakeAccessProperties
 * @property array<string, string> $CustomProperties
 */
class CatalogPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     DataLakeAccessProperties?: DataLakeAccessPropertiesOutput,
     *     CustomProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
