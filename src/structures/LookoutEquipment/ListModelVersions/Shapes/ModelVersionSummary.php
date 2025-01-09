<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property int<1, max> $ModelVersion
 * @property string $ModelVersionArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT' $SourceType
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED' $ModelQuality
 */
class ModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelArn?: string,
     *     ModelVersion?: int<1, max>,
     *     ModelVersionArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED',
     *     SourceType?: 'TRAINING'|'RETRAINING'|'IMPORT',
     *     ModelQuality?: 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
