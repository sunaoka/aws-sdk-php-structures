<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $testExecutionId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $testExecutionStatus
 * @property string|null $testSetId
 * @property string|null $testSetName
 * @property Shapes\TestExecutionTarget|null $target
 * @property 'Streaming'|'NonStreaming'|null $apiMode
 * @property 'Text'|'Audio'|null $testExecutionModality
 * @property list<string>|null $failureReasons
 */
class DescribeTestExecutionResponse extends Response
{
}
