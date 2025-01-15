<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldLinkConfiguration|null $LinkConfiguration
 * @property TableFieldImageConfiguration|null $ImageConfiguration
 */
class TableFieldURLConfiguration extends Shape
{
    /**
     * @param array{
     *     LinkConfiguration?: TableFieldLinkConfiguration|null,
     *     ImageConfiguration?: TableFieldImageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
