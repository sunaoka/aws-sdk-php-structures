<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigV4Authorization|null $sigv4
 */
class HttpAuthorization extends Shape
{
    /**
     * @param array{sigv4?: SigV4Authorization|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
