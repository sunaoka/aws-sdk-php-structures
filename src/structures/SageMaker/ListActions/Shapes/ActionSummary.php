<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionArn
 * @property string|null $ActionName
 * @property ActionSource|null $Source
 * @property string|null $ActionType
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     ActionArn?: string|null,
     *     ActionName?: string|null,
     *     Source?: ActionSource|null,
     *     ActionType?: string|null,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
