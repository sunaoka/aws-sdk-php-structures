<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SyntheticDataColumnProperties> $columnMapping
 */
class ColumnClassificationDetails extends Shape
{
    /**
     * @param array{columnMapping: list<SyntheticDataColumnProperties>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
