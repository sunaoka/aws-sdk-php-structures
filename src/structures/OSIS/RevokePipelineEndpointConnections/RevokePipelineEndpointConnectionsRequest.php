<?php

namespace Sunaoka\Aws\Structures\OSIS\RevokePipelineEndpointConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineArn
 * @property list<string> $EndpointIds
 */
class RevokePipelineEndpointConnectionsRequest extends Request
{
    /**
     * @param array{
     *     PipelineArn: string,
     *     EndpointIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
