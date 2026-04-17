<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 128>|null $versionId
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $activated
 * @property \Aws\Api\DateTimeResult|null $superseded
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property 'UPDATING'|'ACTIVE'|'SUPERSEDED'|'FAILED_TO_UPDATE'|null $status
 * @property list<'INTERNAL_ERROR'|'INVALID_SATELLITE_ARN'|'INVALID_UPDATE_CONTACT_REQUEST'|'EPHEMERIS_NOT_FOUND'|'EPHEMERIS_TIME_RANGE_INVALID'|'EPHEMERIS_NOT_ENABLED'|'SATELLITE_DOES_NOT_MATCH_EPHEMERIS'|'NOT_ONBOARDED_TO_AZEL_EPHEMERIS'|'AZEL_EPHEMERIS_NOT_FOUND'|'AZEL_EPHEMERIS_WRONG_GROUND_STATION'|'AZEL_EPHEMERIS_INVALID_STATUS'|'AZEL_EPHEMERIS_TIME_RANGE_INVALID'>|null $failureCodes
 * @property string|null $failureMessage
 */
class ContactVersion extends Shape
{
    /**
     * @param array{
     *     versionId?: int<1, 128>|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     activated?: \Aws\Api\DateTimeResult|null,
     *     superseded?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     status?: 'UPDATING'|'ACTIVE'|'SUPERSEDED'|'FAILED_TO_UPDATE'|null,
     *     failureCodes?: list<'INTERNAL_ERROR'|'INVALID_SATELLITE_ARN'|'INVALID_UPDATE_CONTACT_REQUEST'|'EPHEMERIS_NOT_FOUND'|'EPHEMERIS_TIME_RANGE_INVALID'|'EPHEMERIS_NOT_ENABLED'|'SATELLITE_DOES_NOT_MATCH_EPHEMERIS'|'NOT_ONBOARDED_TO_AZEL_EPHEMERIS'|'AZEL_EPHEMERIS_NOT_FOUND'|'AZEL_EPHEMERIS_WRONG_GROUND_STATION'|'AZEL_EPHEMERIS_INVALID_STATUS'|'AZEL_EPHEMERIS_TIME_RANGE_INVALID'>|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
