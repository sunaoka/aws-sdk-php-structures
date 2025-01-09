<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Size
 */
class VolumeDetail extends Shape
{
    /**
     * @param array{Size: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
