<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $Enabled
 * @property list<'send'|'reject'|'bounce'|'complaint'|'delivery'|'open'|'click'|'renderingFailure'> $MatchingEventTypes
 * @property KinesisFirehoseDestination $KinesisFirehoseDestination
 * @property CloudWatchDestination $CloudWatchDestination
 * @property SNSDestination $SNSDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool,
     *     MatchingEventTypes: list<'send'|'reject'|'bounce'|'complaint'|'delivery'|'open'|'click'|'renderingFailure'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination,
     *     CloudWatchDestination?: CloudWatchDestination,
     *     SNSDestination?: SNSDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
