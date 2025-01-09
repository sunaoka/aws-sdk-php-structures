<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 * @property list<Shapes\Processor> $Processors
 * @property string $Name
 */
class UpdateChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     ChannelFlowArn: string,
     *     Processors: list<Shapes\Processor>,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
