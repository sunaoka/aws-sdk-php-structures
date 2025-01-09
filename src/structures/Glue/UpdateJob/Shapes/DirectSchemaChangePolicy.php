<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableUpdateCatalog
 * @property 'UPDATE_IN_DATABASE'|'LOG' $UpdateBehavior
 * @property string $Table
 * @property string $Database
 */
class DirectSchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     EnableUpdateCatalog?: bool,
     *     UpdateBehavior?: 'UPDATE_IN_DATABASE'|'LOG',
     *     Table?: string,
     *     Database?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
