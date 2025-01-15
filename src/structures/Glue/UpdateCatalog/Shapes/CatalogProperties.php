<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeAccessProperties|null $DataLakeAccessProperties
 * @property array<string, string>|null $CustomProperties
 */
class CatalogProperties extends Shape
{
    /**
     * @param array{
     *     DataLakeAccessProperties?: DataLakeAccessProperties|null,
     *     CustomProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
