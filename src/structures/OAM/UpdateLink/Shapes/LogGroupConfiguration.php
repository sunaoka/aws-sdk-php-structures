<?php

namespace Sunaoka\Aws\Structures\OAM\UpdateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Filter
 */
class LogGroupConfiguration extends Shape
{
    /**
     * @param array{Filter: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
