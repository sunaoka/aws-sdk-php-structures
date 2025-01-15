<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelArn
 * @property string|null $MessageId
 * @property string|null $Content
 * @property string|null $Metadata
 * @property 'STANDARD'|'CONTROL'|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastEditedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property Identity|null $Sender
 * @property bool|null $Redacted
 * @property 'PERSISTENT'|'NON_PERSISTENT'|null $Persistence
 * @property ChannelMessageStatusStructure|null $Status
 * @property array<string, MessageAttributeValue>|null $MessageAttributes
 * @property string|null $SubChannelId
 * @property string|null $ContentType
 * @property list<Target>|null $Target
 */
class ChannelMessage extends Shape
{
    /**
     * @param array{
     *     ChannelArn?: string|null,
     *     MessageId?: string|null,
     *     Content?: string|null,
     *     Metadata?: string|null,
     *     Type?: 'STANDARD'|'CONTROL'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastEditedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Sender?: Identity|null,
     *     Redacted?: bool|null,
     *     Persistence?: 'PERSISTENT'|'NON_PERSISTENT'|null,
     *     Status?: ChannelMessageStatusStructure|null,
     *     MessageAttributes?: array<string, MessageAttributeValue>|null,
     *     SubChannelId?: string|null,
     *     ContentType?: string|null,
     *     Target?: list<Target>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
