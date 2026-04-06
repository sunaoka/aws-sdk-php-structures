<?php

namespace Sunaoka\Aws\Structures\Athena\ListDataCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogName
 * @property 'LAMBDA'|'GLUE'|'HIVE'|null $Type
 */
class DataCatalogSummary extends Shape
{
    /**
     * @param array{
     *     CatalogName?: string|null,
     *     Type?: 'LAMBDA'|'GLUE'|'HIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
