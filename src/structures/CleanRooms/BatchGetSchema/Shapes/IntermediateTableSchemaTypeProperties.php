<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intermediateTableId
 */
class IntermediateTableSchemaTypeProperties extends Shape
{
    /**
     * @param array{intermediateTableId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
