<?php

namespace Sunaoka\Aws\Structures\Glue\ListStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TextPlain
 */
class StatementOutputData extends Shape
{
    /**
     * @param array{TextPlain?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
