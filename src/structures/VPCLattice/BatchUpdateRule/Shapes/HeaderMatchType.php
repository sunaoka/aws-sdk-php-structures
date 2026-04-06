<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exact
 * @property string|null $prefix
 * @property string|null $contains
 */
class HeaderMatchType extends Shape
{
    /**
     * @param array{
     *     exact?: string|null,
     *     prefix?: string|null,
     *     contains?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
