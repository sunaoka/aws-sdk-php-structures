<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUICK_DESKTOP' $InboundConnectorType
 */
class InboundConnectorConfig extends Shape
{
    /**
     * @param array{InboundConnectorType: 'QUICK_DESKTOP'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
