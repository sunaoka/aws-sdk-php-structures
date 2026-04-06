<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class StringFilter extends Shape
{
    /**
     * @param array{Value: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
