<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 */
class TargetGroup extends Shape
{
    /**
     * @param array{Arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
