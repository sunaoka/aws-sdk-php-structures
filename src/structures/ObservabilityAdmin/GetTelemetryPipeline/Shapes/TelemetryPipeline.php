<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CreatedTimeStamp
 * @property int|null $LastUpdateTimeStamp
 * @property string|null $Arn
 * @property string|null $Name
 * @property TelemetryPipelineConfiguration|null $Configuration
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $Status
 * @property TelemetryPipelineStatusReason|null $StatusReason
 * @property array<string, string>|null $Tags
 */
class TelemetryPipeline extends Shape
{
    /**
     * @param array{
     *     CreatedTimeStamp?: int|null,
     *     LastUpdateTimeStamp?: int|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Configuration?: TelemetryPipelineConfiguration|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     StatusReason?: TelemetryPipelineStatusReason|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
