<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AT_TIP'|'BEHIND_TIP'|null $iteratorPosition
 */
class IteratorDescription extends Shape
{
    /**
     * @param array{iteratorPosition?: 'AT_TIP'|'BEHIND_TIP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
