<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property CatalogConfiguration|null $Catalog
 */
class CatalogOptions extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Catalog?: CatalogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
