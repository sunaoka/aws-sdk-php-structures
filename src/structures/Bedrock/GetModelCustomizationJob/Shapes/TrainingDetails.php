<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Completed'|'Stopping'|'Stopped'|'Failed'|'NotStarted'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class TrainingDetails extends Shape
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Completed'|'Stopping'|'Stopped'|'Failed'|'NotStarted'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
