<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableIdentityPropagation
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{EnableIdentityPropagation?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
