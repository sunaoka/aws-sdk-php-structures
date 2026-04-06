<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property Shapes\ChannelStorage|null $channelStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property list<Shapes\Tag>|null $tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     channelStorage?: Shapes\ChannelStorage|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
