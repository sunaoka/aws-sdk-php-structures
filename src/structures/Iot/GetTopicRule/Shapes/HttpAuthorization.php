<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigV4Authorization $sigv4
 */
class HttpAuthorization extends Shape
{
    /**
     * @param array{sigv4?: SigV4Authorization} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
