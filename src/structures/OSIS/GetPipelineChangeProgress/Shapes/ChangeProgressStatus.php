<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property int $TotalNumberOfStages
 * @property list<ChangeProgressStage> $ChangeProgressStages
 */
class ChangeProgressStatus extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     TotalNumberOfStages?: int,
     *     ChangeProgressStages?: list<ChangeProgressStage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
