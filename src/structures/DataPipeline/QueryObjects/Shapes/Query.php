<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Selector> $selectors
 */
class Query extends Shape
{
    /**
     * @param array{selectors?: list<Selector>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
