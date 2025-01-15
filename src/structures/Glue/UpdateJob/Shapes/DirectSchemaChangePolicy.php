<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableUpdateCatalog
 * @property 'UPDATE_IN_DATABASE'|'LOG'|null $UpdateBehavior
 * @property string|null $Table
 * @property string|null $Database
 */
class DirectSchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     EnableUpdateCatalog?: bool|null,
     *     UpdateBehavior?: 'UPDATE_IN_DATABASE'|'LOG'|null,
     *     Table?: string|null,
     *     Database?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
