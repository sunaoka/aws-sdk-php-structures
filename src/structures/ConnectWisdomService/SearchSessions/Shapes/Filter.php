<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME' $field
 * @property 'EQUALS' $operator
 * @property string $value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     field: 'NAME',
     *     operator: 'EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
