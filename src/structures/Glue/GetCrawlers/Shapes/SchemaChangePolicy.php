<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOG'|'UPDATE_IN_DATABASE' $UpdateBehavior
 * @property 'LOG'|'DELETE_FROM_DATABASE'|'DEPRECATE_IN_DATABASE' $DeleteBehavior
 */
class SchemaChangePolicy extends Shape
{
    /**
     * @param array{
     *     UpdateBehavior?: 'LOG'|'UPDATE_IN_DATABASE',
     *     DeleteBehavior?: 'LOG'|'DELETE_FROM_DATABASE'|'DEPRECATE_IN_DATABASE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
