<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property int<1, max>|null $ModelVersion
 * @property string|null $ModelVersionArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT'|null $SourceType
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null $ModelQuality
 */
class ModelVersionSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     ModelVersion?: int<1, max>|null,
     *     ModelVersionArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null,
     *     SourceType?: 'TRAINING'|'RETRAINING'|'IMPORT'|null,
     *     ModelQuality?: 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
