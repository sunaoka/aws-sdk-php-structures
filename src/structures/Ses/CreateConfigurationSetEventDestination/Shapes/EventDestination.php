<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool|null $Enabled
 * @property list<'send'|'reject'|'bounce'|'complaint'|'delivery'|'open'|'click'|'renderingFailure'> $MatchingEventTypes
 * @property KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property CloudWatchDestination|null $CloudWatchDestination
 * @property SNSDestination|null $SNSDestination
 */
class EventDestination extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Enabled?: bool|null,
     *     MatchingEventTypes: list<'send'|'reject'|'bounce'|'complaint'|'delivery'|'open'|'click'|'renderingFailure'>,
     *     KinesisFirehoseDestination?: KinesisFirehoseDestination|null,
     *     CloudWatchDestination?: CloudWatchDestination|null,
     *     SNSDestination?: SNSDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
