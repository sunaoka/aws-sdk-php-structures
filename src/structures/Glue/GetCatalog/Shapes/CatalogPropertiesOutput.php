<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeAccessPropertiesOutput|null $DataLakeAccessProperties
 * @property IcebergOptimizationPropertiesOutput|null $IcebergOptimizationProperties
 * @property array<string, string>|null $CustomProperties
 */
class CatalogPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     DataLakeAccessProperties?: DataLakeAccessPropertiesOutput|null,
     *     IcebergOptimizationProperties?: IcebergOptimizationPropertiesOutput|null,
     *     CustomProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
