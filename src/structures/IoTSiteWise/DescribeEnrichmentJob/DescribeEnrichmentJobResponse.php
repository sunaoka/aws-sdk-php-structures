<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED' $status
 * @property string $workspaceName
 * @property 'EVENT_DETECTION' $jobType
 * @property Shapes\EnrichmentJobConfiguration $jobConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult|null $cancelledAt
 * @property string|null $failureMessage
 */
class DescribeEnrichmentJobResponse extends Response
{
}
