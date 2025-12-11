<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusterAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlertType
 * @property string|null $ChannelId
 * @property \Aws\Api\DateTimeResult|null $ClearedTimestamp
 * @property string|null $Id
 * @property string|null $Message
 * @property string|null $NodeId
 * @property \Aws\Api\DateTimeResult|null $SetTimestamp
 * @property 'SET'|'CLEARED'|null $State
 */
class ClusterAlert extends Shape
{
    /**
     * @param array{
     *     AlertType?: string|null,
     *     ChannelId?: string|null,
     *     ClearedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Id?: string|null,
     *     Message?: string|null,
     *     NodeId?: string|null,
     *     SetTimestamp?: \Aws\Api\DateTimeResult|null,
     *     State?: 'SET'|'CLEARED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
