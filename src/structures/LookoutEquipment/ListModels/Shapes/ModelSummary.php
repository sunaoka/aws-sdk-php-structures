<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property int $ActiveModelVersion
 * @property string $ActiveModelVersionArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $LatestScheduledRetrainingStatus
 * @property int $LatestScheduledRetrainingModelVersion
 * @property \Aws\Api\DateTimeResult $LatestScheduledRetrainingStartTime
 * @property \Aws\Api\DateTimeResult $NextScheduledRetrainingStartDate
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $RetrainingSchedulerStatus
 * @property ModelDiagnosticsOutputConfiguration $ModelDiagnosticsOutputConfiguration
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED' $ModelQuality
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelArn?: string,
     *     DatasetName?: string,
     *     DatasetArn?: string,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ActiveModelVersion?: int,
     *     ActiveModelVersionArn?: string,
     *     LatestScheduledRetrainingStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED',
     *     LatestScheduledRetrainingModelVersion?: int,
     *     LatestScheduledRetrainingStartTime?: \Aws\Api\DateTimeResult,
     *     NextScheduledRetrainingStartDate?: \Aws\Api\DateTimeResult,
     *     RetrainingSchedulerStatus?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     ModelDiagnosticsOutputConfiguration?: ModelDiagnosticsOutputConfiguration,
     *     ModelQuality?: 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
