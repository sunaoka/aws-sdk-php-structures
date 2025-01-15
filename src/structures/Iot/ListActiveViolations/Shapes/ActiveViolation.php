<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $violationId
 * @property string|null $thingName
 * @property string|null $securityProfileName
 * @property Behavior|null $behavior
 * @property MetricValue|null $lastViolationValue
 * @property ViolationEventAdditionalInfo|null $violationEventAdditionalInfo
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null $verificationState
 * @property string|null $verificationStateDescription
 * @property \Aws\Api\DateTimeResult|null $lastViolationTime
 * @property \Aws\Api\DateTimeResult|null $violationStartTime
 */
class ActiveViolation extends Shape
{
    /**
     * @param array{
     *     violationId?: string|null,
     *     thingName?: string|null,
     *     securityProfileName?: string|null,
     *     behavior?: Behavior|null,
     *     lastViolationValue?: MetricValue|null,
     *     violationEventAdditionalInfo?: ViolationEventAdditionalInfo|null,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null,
     *     verificationStateDescription?: string|null,
     *     lastViolationTime?: \Aws\Api\DateTimeResult|null,
     *     violationStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
