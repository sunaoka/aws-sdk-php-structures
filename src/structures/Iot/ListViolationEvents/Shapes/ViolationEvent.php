<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $violationId
 * @property string|null $thingName
 * @property string|null $securityProfileName
 * @property Behavior|null $behavior
 * @property MetricValue|null $metricValue
 * @property ViolationEventAdditionalInfo|null $violationEventAdditionalInfo
 * @property 'in-alarm'|'alarm-cleared'|'alarm-invalidated'|null $violationEventType
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null $verificationState
 * @property string|null $verificationStateDescription
 * @property \Aws\Api\DateTimeResult|null $violationEventTime
 */
class ViolationEvent extends Shape
{
    /**
     * @param array{
     *     violationId?: string|null,
     *     thingName?: string|null,
     *     securityProfileName?: string|null,
     *     behavior?: Behavior|null,
     *     metricValue?: MetricValue|null,
     *     violationEventAdditionalInfo?: ViolationEventAdditionalInfo|null,
     *     violationEventType?: 'in-alarm'|'alarm-cleared'|'alarm-invalidated'|null,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null,
     *     verificationStateDescription?: string|null,
     *     violationEventTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
