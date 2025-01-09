<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeMapRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $mapRunArn
 * @property string $executionArn
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'ABORTED' $status
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 * @property int $maxConcurrency
 * @property float $toleratedFailurePercentage
 * @property int $toleratedFailureCount
 * @property Shapes\MapRunItemCounts $itemCounts
 * @property Shapes\MapRunExecutionCounts $executionCounts
 * @property int $redriveCount
 * @property \Aws\Api\DateTimeResult $redriveDate
 */
class DescribeMapRunResponse extends Response
{
}
