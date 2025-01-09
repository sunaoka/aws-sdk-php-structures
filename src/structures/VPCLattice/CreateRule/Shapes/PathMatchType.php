<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 * @property string $prefix
 */
class PathMatchType extends Shape
{
    /**
     * @param array{
     *     exact?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
