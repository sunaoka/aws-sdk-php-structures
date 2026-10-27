<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DisconnectEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationEndpointArn
 * @property string $SourceEndpointArn
 */
class DisconnectEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DestinationEndpointArn: string,
     *     SourceEndpointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
