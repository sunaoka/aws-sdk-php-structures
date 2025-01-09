<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property double $Duration
 * @property double $ResponseTime
 * @property bool $HasFault
 * @property bool $HasError
 * @property bool $HasThrottle
 * @property bool $IsPartial
 * @property Http $Http
 * @property array<string, list<ValueWithServiceIds>> $Annotations
 * @property list<TraceUser> $Users
 * @property list<ServiceId> $ServiceIds
 * @property list<ResourceARNDetail> $ResourceARNs
 * @property list<InstanceIdDetail> $InstanceIds
 * @property list<AvailabilityZoneDetail> $AvailabilityZones
 * @property ServiceId $EntryPoint
 * @property list<FaultRootCause> $FaultRootCauses
 * @property list<ErrorRootCause> $ErrorRootCauses
 * @property list<ResponseTimeRootCause> $ResponseTimeRootCauses
 * @property int $Revision
 * @property \Aws\Api\DateTimeResult $MatchedEventTime
 */
class TraceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Duration?: double,
     *     ResponseTime?: double,
     *     HasFault?: bool,
     *     HasError?: bool,
     *     HasThrottle?: bool,
     *     IsPartial?: bool,
     *     Http?: Http,
     *     Annotations?: array<string, list<ValueWithServiceIds>>,
     *     Users?: list<TraceUser>,
     *     ServiceIds?: list<ServiceId>,
     *     ResourceARNs?: list<ResourceARNDetail>,
     *     InstanceIds?: list<InstanceIdDetail>,
     *     AvailabilityZones?: list<AvailabilityZoneDetail>,
     *     EntryPoint?: ServiceId,
     *     FaultRootCauses?: list<FaultRootCause>,
     *     ErrorRootCauses?: list<ErrorRootCause>,
     *     ResponseTimeRootCauses?: list<ResponseTimeRootCause>,
     *     Revision?: int,
     *     MatchedEventTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
