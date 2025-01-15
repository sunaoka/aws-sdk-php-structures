<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property 'FINDING'|'CLOUD_TRAIL'|'S3_DATA_EVENTS' $Type
 * @property string|null $Description
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult $FirstSeenAt
 * @property \Aws\Api\DateTimeResult $LastSeenAt
 * @property double|null $Severity
 * @property int $Count
 * @property list<string>|null $ResourceUids
 * @property list<string>|null $ActorIds
 * @property list<string>|null $EndpointIds
 * @property list<Indicator>|null $SignalIndicators
 */
class Signal extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Type: 'FINDING'|'CLOUD_TRAIL'|'S3_DATA_EVENTS',
     *     Description?: string|null,
     *     Name: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     FirstSeenAt: \Aws\Api\DateTimeResult,
     *     LastSeenAt: \Aws\Api\DateTimeResult,
     *     Severity?: double|null,
     *     Count: int,
     *     ResourceUids?: list<string>|null,
     *     ActorIds?: list<string>|null,
     *     EndpointIds?: list<string>|null,
     *     SignalIndicators?: list<Indicator>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
