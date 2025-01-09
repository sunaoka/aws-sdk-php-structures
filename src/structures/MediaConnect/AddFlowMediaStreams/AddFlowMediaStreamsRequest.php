<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property list<Shapes\AddMediaStreamRequest> $MediaStreams
 */
class AddFlowMediaStreamsRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     MediaStreams: list<Shapes\AddMediaStreamRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
