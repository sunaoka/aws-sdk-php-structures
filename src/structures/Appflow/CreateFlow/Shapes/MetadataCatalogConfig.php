<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataCatalogConfig $glueDataCatalog
 */
class MetadataCatalogConfig extends Shape
{
    /**
     * @param array{glueDataCatalog?: GlueDataCatalogConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
