<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $value
 * @property list<ColumnLineageEntry> $columnLineage
 */
class InheritedDisallowedOutputColumns extends Shape
{
    /**
     * @param array{
     *     value: list<string>,
     *     columnLineage: list<ColumnLineageEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
