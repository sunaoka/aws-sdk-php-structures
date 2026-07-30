<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableTableCreation
 */
class TableCreation extends Shape
{
    /**
     * @param array{EnableTableCreation?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
