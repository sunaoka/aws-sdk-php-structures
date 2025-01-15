<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TextPlain
 */
class StatementOutputData extends Shape
{
    /**
     * @param array{TextPlain?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
