<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testExecutionId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $testExecutionStatus
 * @property string $testSetId
 * @property string $testSetName
 * @property Shapes\TestExecutionTarget $target
 * @property 'Streaming'|'NonStreaming' $apiMode
 * @property 'Text'|'Audio' $testExecutionModality
 * @property list<string> $failureReasons
 */
class DescribeTestExecutionResponse extends Response
{
}
