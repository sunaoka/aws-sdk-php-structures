<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\GetAbuseReportStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $reportId
 * @property string|null $correlationId
 * @property 'QUEUED'|'PROCESSING'|'COMPLETED' $status
 * @property string $description
 * @property 'ACTIONED'|'NOT_RESOLVABLE_TO_AWS'|'REVIEWED_NO_AWS_ACTION'|'CONTENT_DOWN_OR_INACCESSIBLE'|'NEED_MORE_INFORMATION'|null $reasonCode
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetAbuseReportStatusResponse extends Response
{
}
