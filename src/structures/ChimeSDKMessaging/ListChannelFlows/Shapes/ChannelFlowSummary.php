<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelFlowArn
 * @property string|null $Name
 * @property list<Processor>|null $Processors
 */
class ChannelFlowSummary extends Shape
{
    /**
     * @param array{
     *     ChannelFlowArn?: string|null,
     *     Name?: string|null,
     *     Processors?: list<Processor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
