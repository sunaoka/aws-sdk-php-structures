<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contains
 * @property string $exact
 * @property string $prefix
 */
class HeaderMatchType extends Shape
{
    /**
     * @param array{
     *     contains?: string,
     *     exact?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
