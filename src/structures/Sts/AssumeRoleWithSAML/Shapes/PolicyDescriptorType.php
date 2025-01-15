<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 */
class PolicyDescriptorType extends Shape
{
    /**
     * @param array{arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
