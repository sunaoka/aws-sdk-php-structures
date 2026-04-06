<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogArn
 */
class TargetRedshiftCatalog extends Shape
{
    /**
     * @param array{CatalogArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
