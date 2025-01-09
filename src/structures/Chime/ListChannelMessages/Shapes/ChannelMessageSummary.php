<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property string $Content
 * @property string $Metadata
 * @property 'STANDARD'|'CONTROL' $Type
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastEditedTimestamp
 * @property Identity $Sender
 * @property bool $Redacted
 */
class ChannelMessageSummary extends Shape
{
    /**
     * @param array{
     *     MessageId?: string,
     *     Content?: string,
     *     Metadata?: string,
     *     Type?: 'STANDARD'|'CONTROL',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastEditedTimestamp?: \Aws\Api\DateTimeResult,
     *     Sender?: Identity,
     *     Redacted?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
