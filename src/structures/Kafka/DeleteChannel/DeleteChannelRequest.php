<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ClusterArn
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ClusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
