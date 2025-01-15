<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exact
 * @property string|null $regex
 */
class HttpPathMatch extends Shape
{
    /**
     * @param array{
     *     exact?: string|null,
     *     regex?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
