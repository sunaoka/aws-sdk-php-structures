<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableUpdateCatalog
 * @property 'UPDATE_IN_DATABASE'|'LOG'|null $UpdateBehavior
 */
class CatalogSchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     EnableUpdateCatalog?: bool|null,
     *     UpdateBehavior?: 'UPDATE_IN_DATABASE'|'LOG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
