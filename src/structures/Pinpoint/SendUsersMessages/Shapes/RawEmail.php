<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 */
class RawEmail extends Shape
{
    /**
     * @param array{Data?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
