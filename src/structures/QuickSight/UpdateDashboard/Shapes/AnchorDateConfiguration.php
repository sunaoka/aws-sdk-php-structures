<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOW'|null $AnchorOption
 * @property string|null $ParameterName
 */
class AnchorDateConfiguration extends Shape
{
    /**
     * @param array{
     *     AnchorOption?: 'NOW'|null,
     *     ParameterName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
