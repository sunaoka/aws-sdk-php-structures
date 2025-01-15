<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property int|null $TotalNumberOfStages
 * @property list<ChangeProgressStage>|null $ChangeProgressStages
 */
class ChangeProgressStatus extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     TotalNumberOfStages?: int|null,
     *     ChangeProgressStages?: list<ChangeProgressStage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
