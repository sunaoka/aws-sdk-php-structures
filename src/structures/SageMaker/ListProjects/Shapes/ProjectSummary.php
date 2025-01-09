<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectName
 * @property string $ProjectDescription
 * @property string $ProjectArn
 * @property string $ProjectId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed' $ProjectStatus
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectDescription?: string,
     *     ProjectArn: string,
     *     ProjectId: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ProjectStatus: 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
