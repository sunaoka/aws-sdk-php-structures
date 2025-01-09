<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalNavigationConfiguration $LocalNavigationConfiguration
 */
class CustomActionNavigationOperation extends Shape
{
    /**
     * @param array{LocalNavigationConfiguration?: LocalNavigationConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
