<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property string $FlowSourceArn
 * @property string $Name
 */
class BridgeFlowOutput extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     FlowSourceArn: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
