<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelArn
 * @property string $MessageId
 * @property string $Content
 * @property string $Metadata
 * @property 'STANDARD'|'CONTROL' $Type
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastEditedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property Identity $Sender
 * @property bool $Redacted
 * @property 'PERSISTENT'|'NON_PERSISTENT' $Persistence
 * @property ChannelMessageStatusStructure $Status
 * @property array<string, MessageAttributeValue> $MessageAttributes
 * @property string $SubChannelId
 * @property string $ContentType
 * @property list<Target> $Target
 */
class ChannelMessage extends Shape
{
    /**
     * @param array{
     *     ChannelArn?: string,
     *     MessageId?: string,
     *     Content?: string,
     *     Metadata?: string,
     *     Type?: 'STANDARD'|'CONTROL',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastEditedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Sender?: Identity,
     *     Redacted?: bool,
     *     Persistence?: 'PERSISTENT'|'NON_PERSISTENT',
     *     Status?: ChannelMessageStatusStructure,
     *     MessageAttributes?: array<string, MessageAttributeValue>,
     *     SubChannelId?: string,
     *     ContentType?: string,
     *     Target?: list<Target>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
