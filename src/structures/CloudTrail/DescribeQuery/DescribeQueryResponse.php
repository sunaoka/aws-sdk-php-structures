<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $QueryId
 * @property string|null $QueryString
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null $QueryStatus
 * @property Shapes\QueryStatisticsForDescribeQuery|null $QueryStatistics
 * @property string|null $ErrorMessage
 * @property string|null $DeliveryS3Uri
 * @property 'SUCCESS'|'FAILED'|'FAILED_SIGNING_FILE'|'PENDING'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'ACCESS_DENIED_SIGNING_FILE'|'CANCELLED'|'UNKNOWN'|null $DeliveryStatus
 * @property string|null $Prompt
 * @property string|null $EventDataStoreOwnerAccountId
 */
class DescribeQueryResponse extends Response
{
}
