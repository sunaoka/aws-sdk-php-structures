<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentAttributeKey
 * @property 'DESC'|'ASC' $SortOrder
 */
class SortingConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey: string,
     *     SortOrder: 'DESC'|'ASC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
