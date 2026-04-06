<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contactId
 * @property string|null $missionProfileArn
 * @property string|null $satelliteArn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $prePassStartTime
 * @property \Aws\Api\DateTimeResult|null $postPassEndTime
 * @property string|null $groundStation
 * @property 'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'|null $contactStatus
 * @property string|null $errorMessage
 * @property Elevation|null $maximumElevation
 * @property string|null $region
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $visibilityStartTime
 * @property \Aws\Api\DateTimeResult|null $visibilityEndTime
 * @property EphemerisResponseData|null $ephemeris
 */
class ContactData extends Shape
{
    /**
     * @param array{
     *     contactId?: string|null,
     *     missionProfileArn?: string|null,
     *     satelliteArn?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     prePassStartTime?: \Aws\Api\DateTimeResult|null,
     *     postPassEndTime?: \Aws\Api\DateTimeResult|null,
     *     groundStation?: string|null,
     *     contactStatus?: 'SCHEDULING'|'FAILED_TO_SCHEDULE'|'SCHEDULED'|'CANCELLED'|'AWS_CANCELLED'|'PREPASS'|'PASS'|'POSTPASS'|'COMPLETED'|'FAILED'|'AVAILABLE'|'CANCELLING'|'AWS_FAILED'|null,
     *     errorMessage?: string|null,
     *     maximumElevation?: Elevation|null,
     *     region?: string|null,
     *     tags?: array<string, string>|null,
     *     visibilityStartTime?: \Aws\Api\DateTimeResult|null,
     *     visibilityEndTime?: \Aws\Api\DateTimeResult|null,
     *     ephemeris?: EphemerisResponseData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
