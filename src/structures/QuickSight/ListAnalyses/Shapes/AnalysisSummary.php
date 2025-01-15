<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AnalysisId
 * @property string|null $Name
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class AnalysisSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AnalysisId?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
