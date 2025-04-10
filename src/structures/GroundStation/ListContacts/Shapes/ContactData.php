<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contactId
 * @property 'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'|null $contactStatus
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $errorMessage
 * @property string|null $groundStation
 * @property Elevation|null $maximumElevation
 * @property string|null $missionProfileArn
 * @property \Aws\Api\DateTimeResult|null $postPassEndTime
 * @property \Aws\Api\DateTimeResult|null $prePassStartTime
 * @property string|null $region
 * @property string|null $satelliteArn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $visibilityEndTime
 * @property \Aws\Api\DateTimeResult|null $visibilityStartTime
 */
class ContactData extends Shape
{
    /**
     * @param array{
     *     contactId?: string|null,
     *     contactStatus?: 'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     errorMessage?: string|null,
     *     groundStation?: string|null,
     *     maximumElevation?: Elevation|null,
     *     missionProfileArn?: string|null,
     *     postPassEndTime?: \Aws\Api\DateTimeResult|null,
     *     prePassStartTime?: \Aws\Api\DateTimeResult|null,
     *     region?: string|null,
     *     satelliteArn?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     visibilityEndTime?: \Aws\Api\DateTimeResult|null,
     *     visibilityStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
