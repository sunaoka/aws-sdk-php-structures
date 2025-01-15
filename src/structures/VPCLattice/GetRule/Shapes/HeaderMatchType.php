<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contains
 * @property string|null $exact
 * @property string|null $prefix
 */
class HeaderMatchType extends Shape
{
    /**
     * @param array{
     *     contains?: string|null,
     *     exact?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
