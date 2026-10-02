<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $rateLimit
 */
class ThrottleConfig extends Shape
{
    /**
     * @param array{rateLimit?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
