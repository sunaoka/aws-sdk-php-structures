<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Data
 */
class UserData extends Shape
{
    /**
     * @param array{Data?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
