<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queryId
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELED'|'CANCELING' $status
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property Shapes\QueryStatistics|null $statistics
 * @property string|null $errorMessage
 */
class DescribeQueryResponse extends Response
{
}
