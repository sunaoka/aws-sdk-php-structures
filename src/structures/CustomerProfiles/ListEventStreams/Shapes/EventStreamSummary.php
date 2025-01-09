<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $EventStreamName
 * @property string $EventStreamArn
 * @property 'RUNNING'|'STOPPED' $State
 * @property \Aws\Api\DateTimeResult $StoppedSince
 * @property DestinationSummary $DestinationSummary
 * @property array<string, string> $Tags
 */
class EventStreamSummary extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventStreamName: string,
     *     EventStreamArn: string,
     *     State: 'RUNNING'|'STOPPED',
     *     StoppedSince?: \Aws\Api\DateTimeResult,
     *     DestinationSummary?: DestinationSummary,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
