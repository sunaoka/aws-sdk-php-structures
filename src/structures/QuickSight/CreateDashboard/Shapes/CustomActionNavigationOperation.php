<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalNavigationConfiguration|null $LocalNavigationConfiguration
 */
class CustomActionNavigationOperation extends Shape
{
    /**
     * @param array{LocalNavigationConfiguration?: LocalNavigationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
