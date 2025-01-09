<?php

namespace Sunaoka\Aws\Structures\Chime\GetChannelMessage\Shapes;

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
     *     Persistence?: 'PERSISTENT'|'NON_PERSISTENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
