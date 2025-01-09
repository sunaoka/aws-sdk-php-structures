<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $QueryId
 * @property string $QueryString
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT' $QueryStatus
 * @property Shapes\QueryStatisticsForDescribeQuery $QueryStatistics
 * @property string $ErrorMessage
 * @property string $DeliveryS3Uri
 * @property 'SUCCESS'|'FAILED'|'FAILED_SIGNING_FILE'|'PENDING'|'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'ACCESS_DENIED_SIGNING_FILE'|'CANCELLED'|'UNKNOWN' $DeliveryStatus
 * @property string $Prompt
 * @property string $EventDataStoreOwnerAccountId
 */
class DescribeQueryResponse extends Response
{
}
