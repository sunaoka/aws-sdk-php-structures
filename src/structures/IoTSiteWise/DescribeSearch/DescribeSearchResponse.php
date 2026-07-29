<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $searchId
 * @property string $workspaceName
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string $queryStatement
 * @property 'DEEP'|'QUICK' $searchType
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $groupId
 */
class DescribeSearchResponse extends Response
{
}
