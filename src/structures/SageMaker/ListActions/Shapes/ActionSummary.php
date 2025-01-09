<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionArn
 * @property string $ActionName
 * @property ActionSource $Source
 * @property string $ActionType
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     ActionArn?: string,
     *     ActionName?: string,
     *     Source?: ActionSource,
     *     ActionType?: string,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
