<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $value
 * @property list<InheritedAllowedResultReceiversSource> $sources
 */
class InheritedAllowedResultReceivers extends Shape
{
    /**
     * @param array{
     *     value: list<string>,
     *     sources: list<InheritedAllowedResultReceiversSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
