<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property 'FINDING'|'CLOUD_TRAIL'|'S3_DATA_EVENTS' $Type
 * @property string $Description
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult $FirstSeenAt
 * @property \Aws\Api\DateTimeResult $LastSeenAt
 * @property double $Severity
 * @property int $Count
 * @property list<string> $ResourceUids
 * @property list<string> $ActorIds
 * @property list<string> $EndpointIds
 * @property list<Indicator> $SignalIndicators
 */
class Signal extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Type: 'FINDING'|'CLOUD_TRAIL'|'S3_DATA_EVENTS',
     *     Description?: string,
     *     Name: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     FirstSeenAt: \Aws\Api\DateTimeResult,
     *     LastSeenAt: \Aws\Api\DateTimeResult,
     *     Severity?: double,
     *     Count: int,
     *     ResourceUids?: list<string>,
     *     ActorIds?: list<string>,
     *     EndpointIds?: list<string>,
     *     SignalIndicators?: list<Indicator>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
