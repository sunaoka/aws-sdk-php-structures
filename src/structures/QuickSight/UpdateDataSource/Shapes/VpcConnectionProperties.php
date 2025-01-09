<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConnectionArn
 */
class VpcConnectionProperties extends Shape
{
    /**
     * @param array{VpcConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
