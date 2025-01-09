<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $contactId
 * @property 'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING' $contactStatus
 * @property list<Shapes\DataflowDetail> $dataflowList
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $errorMessage
 * @property string $groundStation
 * @property Shapes\Elevation $maximumElevation
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
class DescribeContactResponse extends Response
{
}
