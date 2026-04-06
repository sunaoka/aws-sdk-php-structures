<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueTableReference|null $glue
 */
class TableReference extends Shape
{
    /**
     * @param array{glue?: GlueTableReference|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
