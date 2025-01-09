<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contactId
 * @property 'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING' $contactStatus
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $errorMessage
 * @property string $groundStation
 * @property Elevation $maximumElevation
 * @property string $missionProfileArn
 * @property \Aws\Api\DateTimeResult $postPassEndTime
 * @property \Aws\Api\DateTimeResult $prePassStartTime
 * @property string $region
 * @property string $satelliteArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $visibilityEndTime
 * @property \Aws\Api\DateTimeResult $visibilityStartTime
 */
class ContactData extends Shape
{
    /**
     * @param array{
     *     contactId?: string,
     *     contactStatus?: 'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     errorMessage?: string,
     *     groundStation?: string,
     *     maximumElevation?: Elevation,
     *     missionProfileArn?: string,
     *     postPassEndTime?: \Aws\Api\DateTimeResult,
     *     prePassStartTime?: \Aws\Api\DateTimeResult,
     *     region?: string,
     *     satelliteArn?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     visibilityEndTime?: \Aws\Api\DateTimeResult,
     *     visibilityStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
