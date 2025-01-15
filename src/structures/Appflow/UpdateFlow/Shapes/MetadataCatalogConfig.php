<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataCatalogConfig|null $glueDataCatalog
 */
class MetadataCatalogConfig extends Shape
{
    /**
     * @param array{glueDataCatalog?: GlueDataCatalogConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
