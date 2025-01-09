<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class PolicyDescriptorType extends Shape
{
    /**
     * @param array{arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
