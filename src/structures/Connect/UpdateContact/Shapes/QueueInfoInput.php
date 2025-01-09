<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class QueueInfoInput extends Shape
{
    /**
     * @param array{Id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
