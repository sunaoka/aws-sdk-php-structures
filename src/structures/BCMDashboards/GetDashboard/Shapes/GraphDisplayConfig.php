<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINE'|'BAR'|'STACK' $visualType
 */
class GraphDisplayConfig extends Shape
{
    /**
     * @param array{visualType: 'LINE'|'BAR'|'STACK'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
