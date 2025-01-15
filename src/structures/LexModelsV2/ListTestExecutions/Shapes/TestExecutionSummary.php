<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $testExecutionId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $testExecutionStatus
 * @property string|null $testSetId
 * @property string|null $testSetName
 * @property TestExecutionTarget|null $target
 * @property 'Streaming'|'NonStreaming'|null $apiMode
 * @property 'Text'|'Audio'|null $testExecutionModality
 */
class TestExecutionSummary extends Shape
{
    /**
     * @param array{
     *     testExecutionId?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     testExecutionStatus?: 'Pending'|'Waiting'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     testSetId?: string|null,
     *     testSetName?: string|null,
     *     target?: TestExecutionTarget|null,
     *     apiMode?: 'Streaming'|'NonStreaming'|null,
     *     testExecutionModality?: 'Text'|'Audio'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
