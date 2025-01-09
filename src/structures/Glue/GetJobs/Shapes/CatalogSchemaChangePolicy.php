<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableUpdateCatalog
 * @property 'UPDATE_IN_DATABASE'|'LOG' $UpdateBehavior
 */
class CatalogSchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     EnableUpdateCatalog?: bool,
     *     UpdateBehavior?: 'UPDATE_IN_DATABASE'|'LOG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
