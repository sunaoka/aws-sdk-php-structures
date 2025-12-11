<?php

namespace Sunaoka\Aws\Structures\Connect\SearchViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneAttributeFilter|null $AttributeFilter
 */
class ViewSearchFilter extends Shape
{
    /**
     * @param array{AttributeFilter?: ControlPlaneAttributeFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
