<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactFlowId
 */
class FlowQuickConnectConfig extends Shape
{
    /**
     * @param array{ContactFlowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
