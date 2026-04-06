<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string $channelId
 * @property string $channelName
 * @property string|null $channelDescription
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property 'CREATED'|'CREATING'|'CREATE_FAILED'|'DELETED'|'DELETING'|'DELETE_FAILED' $channelStatus
 * @property int $userCount
 * @property int $groupCount
 */
class ChannelData extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     channelId: string,
     *     channelName: string,
     *     channelDescription?: string|null,
     *     createDateTime: \Aws\Api\DateTimeResult,
     *     deleteDateTime?: \Aws\Api\DateTimeResult|null,
     *     channelStatus: 'CREATED'|'CREATING'|'CREATE_FAILED'|'DELETED'|'DELETING'|'DELETE_FAILED',
     *     userCount: int,
     *     groupCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
