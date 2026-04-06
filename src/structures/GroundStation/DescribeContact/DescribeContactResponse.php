<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $contactId
 * @property 'AVAILABLE'|'AWS_CANCELLED'|'AWS_FAILED'|'CANCELLED'|'CANCELLING'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|'PASS'|'POSTPASS'|'PREPASS'|'SCHEDULED'|'SCHEDULING'|null $contactStatus
 * @property list<Shapes\DataflowDetail>|null $dataflowList
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $errorMessage
 * @property string|null $groundStation
 * @property Shapes\Elevation|null $maximumElevation
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
class DescribeContactResponse extends Response
{
}
