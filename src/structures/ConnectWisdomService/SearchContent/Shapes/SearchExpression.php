<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter> $filters
 */
class SearchExpression extends Shape
{
    /**
     * @param array{filters: list<Filter>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
