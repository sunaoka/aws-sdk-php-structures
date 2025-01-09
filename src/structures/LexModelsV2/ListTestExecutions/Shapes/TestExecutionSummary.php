<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testExecutionId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $testExecutionStatus
 * @property string $testSetId
 * @property string $testSetName
 * @property TestExecutionTarget $target
 * @property 'Streaming'|'NonStreaming' $apiMode
 * @property 'Text'|'Audio' $testExecutionModality
 */
class TestExecutionSummary extends Shape
{
    /**
     * @param array{
     *     testExecutionId?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     testExecutionStatus?: 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     testSetId?: string,
     *     testSetName?: string,
     *     target?: TestExecutionTarget,
     *     apiMode?: 'Streaming'|'NonStreaming',
     *     testExecutionModality?: 'Text'|'Audio'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
