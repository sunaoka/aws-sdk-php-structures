<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowMediaStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property string $MediaStreamName
 */
class RemoveFlowMediaStreamRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
