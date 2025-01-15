<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property double|null $Duration
 * @property double|null $ResponseTime
 * @property bool|null $HasFault
 * @property bool|null $HasError
 * @property bool|null $HasThrottle
 * @property bool|null $IsPartial
 * @property Http|null $Http
 * @property array<string, list<ValueWithServiceIds>>|null $Annotations
 * @property list<TraceUser>|null $Users
 * @property list<ServiceId>|null $ServiceIds
 * @property list<ResourceARNDetail>|null $ResourceARNs
 * @property list<InstanceIdDetail>|null $InstanceIds
 * @property list<AvailabilityZoneDetail>|null $AvailabilityZones
 * @property ServiceId|null $EntryPoint
 * @property list<FaultRootCause>|null $FaultRootCauses
 * @property list<ErrorRootCause>|null $ErrorRootCauses
 * @property list<ResponseTimeRootCause>|null $ResponseTimeRootCauses
 * @property int|null $Revision
 * @property \Aws\Api\DateTimeResult|null $MatchedEventTime
 */
class TraceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: double|null,
     *     ResponseTime?: double|null,
     *     HasFault?: bool|null,
     *     HasError?: bool|null,
     *     HasThrottle?: bool|null,
     *     IsPartial?: bool|null,
     *     Http?: Http|null,
     *     Annotations?: array<string, list<ValueWithServiceIds>>|null,
     *     Users?: list<TraceUser>|null,
     *     ServiceIds?: list<ServiceId>|null,
     *     ResourceARNs?: list<ResourceARNDetail>|null,
     *     InstanceIds?: list<InstanceIdDetail>|null,
     *     AvailabilityZones?: list<AvailabilityZoneDetail>|null,
     *     EntryPoint?: ServiceId|null,
     *     FaultRootCauses?: list<FaultRootCause>|null,
     *     ErrorRootCauses?: list<ErrorRootCause>|null,
     *     ResponseTimeRootCauses?: list<ResponseTimeRootCause>|null,
     *     Revision?: int|null,
     *     MatchedEventTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
