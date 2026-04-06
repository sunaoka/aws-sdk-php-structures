<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $expirationTime
 * @property ChannelSubtypeParameters $channelSubtypeParameters
 */
class OutboundRequest extends Shape
{
    /**
     * @param array{
     *     clientToken: string,
     *     expirationTime: \Aws\Api\DateTimeResult,
     *     channelSubtypeParameters: ChannelSubtypeParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
