<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class KeywordFilter extends Shape
{
    /**
     * @param array{Value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
