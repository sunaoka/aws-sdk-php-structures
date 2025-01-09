<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelFlowArn
 * @property string $Name
 * @property list<Processor> $Processors
 */
class ChannelFlowSummary extends Shape
{
    /**
     * @param array{
     *     ChannelFlowArn?: string,
     *     Name?: string,
     *     Processors?: list<Processor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
