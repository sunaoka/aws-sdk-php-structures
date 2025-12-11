<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowArn
 * @property string|null $FlowSourceArn
 * @property FlowTransitEncryption $DestinationTransitEncryption
 */
class MediaConnectFlowRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string|null,
     *     FlowSourceArn?: string|null,
     *     DestinationTransitEncryption: FlowTransitEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
