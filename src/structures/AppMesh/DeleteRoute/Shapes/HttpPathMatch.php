<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 * @property string $regex
 */
class HttpPathMatch extends Shape
{
    /**
     * @param array{
     *     exact?: string,
     *     regex?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
