<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'reservation-total-capacity-hrs-vcpu'|'reservation-total-capacity-hrs-inst'|'reservation-max-size-vcpu'|'reservation-max-size-inst'|'reservation-min-size-vcpu'|'reservation-min-size-inst'|'reservation-unused-total-capacity-hrs-vcpu'|'reservation-unused-total-capacity-hrs-inst'|'reservation-unused-total-estimated-cost'|'reservation-max-unused-size-vcpu'|'reservation-max-unused-size-inst'|'reservation-min-unused-size-vcpu'|'reservation-min-unused-size-inst'|'reservation-max-utilization'|'reservation-min-utilization'|'reservation-avg-utilization-vcpu'|'reservation-avg-utilization-inst'|'reservation-total-count'|'reservation-total-estimated-cost'|'reservation-avg-future-size-vcpu'|'reservation-avg-future-size-inst'|'reservation-min-future-size-vcpu'|'reservation-min-future-size-inst'|'reservation-max-future-size-vcpu'|'reservation-max-future-size-inst'|'reservation-avg-committed-size-vcpu'|'reservation-avg-committed-size-inst'|'reservation-max-committed-size-vcpu'|'reservation-max-committed-size-inst'|'reservation-min-committed-size-vcpu'|'reservation-min-committed-size-inst'|'reserved-total-usage-hrs-vcpu'|'reserved-total-usage-hrs-inst'|'reserved-total-estimated-cost'|'unreserved-total-usage-hrs-vcpu'|'unreserved-total-usage-hrs-inst'|'unreserved-total-estimated-cost'|'spot-total-usage-hrs-vcpu'|'spot-total-usage-hrs-inst'|'spot-total-estimated-cost'|'spot-avg-run-time-before-interruption-inst'|'spot-max-run-time-before-interruption-inst'|'spot-min-run-time-before-interruption-inst'|'spot-total-interruptions-inst'|'spot-total-interruptions-vcpu'|'spot-total-count-inst'|'spot-total-count-vcpu'|'spot-interruption-rate-inst'|'spot-interruption-rate-vcpu'> $MetricNames
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<3600, 86400> $Period
 * @property list<'resource-region'|'availability-zone-id'|'account-id'|'instance-family'|'instance-type'|'instance-platform'|'reservation-arn'|'reservation-id'|'reservation-type'|'reservation-create-timestamp'|'reservation-start-timestamp'|'reservation-end-timestamp'|'reservation-end-date-type'|'tenancy'|'reservation-state'|'reservation-instance-match-criteria'|'reservation-unused-financial-owner'>|null $GroupBy
 * @property list<Shapes\CapacityManagerCondition>|null $FilterBy
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetCapacityManagerMetricDataRequest extends Request
{
    /**
     * @param array{
     *     MetricNames: list<'reservation-total-capacity-hrs-vcpu'|'reservation-total-capacity-hrs-inst'|'reservation-max-size-vcpu'|'reservation-max-size-inst'|'reservation-min-size-vcpu'|'reservation-min-size-inst'|'reservation-unused-total-capacity-hrs-vcpu'|'reservation-unused-total-capacity-hrs-inst'|'reservation-unused-total-estimated-cost'|'reservation-max-unused-size-vcpu'|'reservation-max-unused-size-inst'|'reservation-min-unused-size-vcpu'|'reservation-min-unused-size-inst'|'reservation-max-utilization'|'reservation-min-utilization'|'reservation-avg-utilization-vcpu'|'reservation-avg-utilization-inst'|'reservation-total-count'|'reservation-total-estimated-cost'|'reservation-avg-future-size-vcpu'|'reservation-avg-future-size-inst'|'reservation-min-future-size-vcpu'|'reservation-min-future-size-inst'|'reservation-max-future-size-vcpu'|'reservation-max-future-size-inst'|'reservation-avg-committed-size-vcpu'|'reservation-avg-committed-size-inst'|'reservation-max-committed-size-vcpu'|'reservation-max-committed-size-inst'|'reservation-min-committed-size-vcpu'|'reservation-min-committed-size-inst'|'reserved-total-usage-hrs-vcpu'|'reserved-total-usage-hrs-inst'|'reserved-total-estimated-cost'|'unreserved-total-usage-hrs-vcpu'|'unreserved-total-usage-hrs-inst'|'unreserved-total-estimated-cost'|'spot-total-usage-hrs-vcpu'|'spot-total-usage-hrs-inst'|'spot-total-estimated-cost'|'spot-avg-run-time-before-interruption-inst'|'spot-max-run-time-before-interruption-inst'|'spot-min-run-time-before-interruption-inst'|'spot-total-interruptions-inst'|'spot-total-interruptions-vcpu'|'spot-total-count-inst'|'spot-total-count-vcpu'|'spot-interruption-rate-inst'|'spot-interruption-rate-vcpu'>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Period: int<3600, 86400>,
     *     GroupBy?: list<'resource-region'|'availability-zone-id'|'account-id'|'instance-family'|'instance-type'|'instance-platform'|'reservation-arn'|'reservation-id'|'reservation-type'|'reservation-create-timestamp'|'reservation-start-timestamp'|'reservation-end-timestamp'|'reservation-end-date-type'|'tenancy'|'reservation-state'|'reservation-instance-match-criteria'|'reservation-unused-financial-owner'>|null,
     *     FilterBy?: list<Shapes\CapacityManagerCondition>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
