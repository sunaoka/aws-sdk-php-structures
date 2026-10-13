<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingSessionArn
 * @property 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed' $TrainingSessionStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class TrainingSessionSummary extends Shape
{
    /**
     * @param array{
     *     TrainingSessionArn: string,
     *     TrainingSessionStatus: 'Created'|'Blocked'|'Running'|'Failed'|'Scheduled'|'Stopping'|'Stopped'|'Expired'|'Deleting'|'DeletionFailed',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
