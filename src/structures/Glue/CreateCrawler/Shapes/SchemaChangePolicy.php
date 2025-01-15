<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOG'|'UPDATE_IN_DATABASE'|null $UpdateBehavior
 * @property 'LOG'|'DELETE_FROM_DATABASE'|'DEPRECATE_IN_DATABASE'|null $DeleteBehavior
 */
class SchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     UpdateBehavior?: 'LOG'|'UPDATE_IN_DATABASE'|null,
     *     DeleteBehavior?: 'LOG'|'DELETE_FROM_DATABASE'|'DEPRECATE_IN_DATABASE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
