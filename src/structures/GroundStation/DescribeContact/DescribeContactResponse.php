<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\Elevation|null $maximumElevation
 * @property array<string, string>|null $tags
 * @property string|null $region
 * @property list<Shapes\DataflowDetail>|null $dataflowList
 * @property \Aws\Api\DateTimeResult|null $visibilityStartTime
 * @property \Aws\Api\DateTimeResult|null $visibilityEndTime
 * @property Shapes\TrackingOverrides|null $trackingOverrides
 * @property Shapes\EphemerisResponseData|null $ephemeris
 */
class DescribeContactResponse extends Response
{
}
