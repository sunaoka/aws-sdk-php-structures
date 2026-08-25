<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 */
class AttachedTo extends Shape
{
    /**
     * @param array{arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
