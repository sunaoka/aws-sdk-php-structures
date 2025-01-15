<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<1, max>|null $ActiveModelVersion
 * @property string|null $ActiveModelVersionArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $LatestScheduledRetrainingStatus
 * @property int<1, max>|null $LatestScheduledRetrainingModelVersion
 * @property \Aws\Api\DateTimeResult|null $LatestScheduledRetrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $NextScheduledRetrainingStartDate
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $RetrainingSchedulerStatus
 * @property ModelDiagnosticsOutputConfiguration|null $ModelDiagnosticsOutputConfiguration
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null $ModelQuality
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     DatasetName?: string|null,
     *     DatasetArn?: string|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ActiveModelVersion?: int<1, max>|null,
     *     ActiveModelVersionArn?: string|null,
     *     LatestScheduledRetrainingStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null,
     *     LatestScheduledRetrainingModelVersion?: int<1, max>|null,
     *     LatestScheduledRetrainingStartTime?: \Aws\Api\DateTimeResult|null,
     *     NextScheduledRetrainingStartDate?: \Aws\Api\DateTimeResult|null,
     *     RetrainingSchedulerStatus?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null,
     *     ModelDiagnosticsOutputConfiguration?: ModelDiagnosticsOutputConfiguration|null,
     *     ModelQuality?: 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
