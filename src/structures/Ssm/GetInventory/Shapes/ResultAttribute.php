<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 */
class ResultAttribute extends Shape
{
    /**
     * @param array{TypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
