<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class FieldIdentifier extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
