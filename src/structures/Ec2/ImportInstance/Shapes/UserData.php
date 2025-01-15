<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Data
 */
class UserData extends Shape
{
    /**
     * @param array{Data?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
