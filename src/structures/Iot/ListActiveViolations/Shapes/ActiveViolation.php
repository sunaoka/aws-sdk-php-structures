<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $violationId
 * @property string $thingName
 * @property string $securityProfileName
 * @property Behavior $behavior
 * @property MetricValue $lastViolationValue
 * @property ViolationEventAdditionalInfo $violationEventAdditionalInfo
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN' $verificationState
 * @property string $verificationStateDescription
 * @property \Aws\Api\DateTimeResult $lastViolationTime
 * @property \Aws\Api\DateTimeResult $violationStartTime
 */
class ActiveViolation extends Shape
{
    /**
     * @param array{
     *     violationId?: string,
     *     thingName?: string,
     *     securityProfileName?: string,
     *     behavior?: Behavior,
     *     lastViolationValue?: MetricValue,
     *     violationEventAdditionalInfo?: ViolationEventAdditionalInfo,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN',
     *     verificationStateDescription?: string,
     *     lastViolationTime?: \Aws\Api\DateTimeResult,
     *     violationStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
