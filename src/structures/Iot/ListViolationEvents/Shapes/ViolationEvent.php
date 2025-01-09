<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $violationId
 * @property string $thingName
 * @property string $securityProfileName
 * @property Behavior $behavior
 * @property MetricValue $metricValue
 * @property ViolationEventAdditionalInfo $violationEventAdditionalInfo
 * @property 'in-alarm'|'alarm-cleared'|'alarm-invalidated' $violationEventType
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN' $verificationState
 * @property string $verificationStateDescription
 * @property \Aws\Api\DateTimeResult $violationEventTime
 */
class ViolationEvent extends Shape
{
    /**
     * @param array{
     *     violationId?: string,
     *     thingName?: string,
     *     securityProfileName?: string,
     *     behavior?: Behavior,
     *     metricValue?: MetricValue,
     *     violationEventAdditionalInfo?: ViolationEventAdditionalInfo,
     *     violationEventType?: 'in-alarm'|'alarm-cleared'|'alarm-invalidated',
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN',
     *     verificationStateDescription?: string,
     *     violationEventTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
