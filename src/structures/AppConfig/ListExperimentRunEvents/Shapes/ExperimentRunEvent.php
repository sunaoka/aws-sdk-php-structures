<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRunEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $AssociatedDeployment
 * @property 'RUN_STARTED'|'EXPOSURE_UPDATED'|'OVERRIDES_UPDATED'|'RUN_STOPPED'|null $EventType
 * @property \Aws\Api\DateTimeResult|null $OccurredAt
 * @property 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR'|null $TriggeredBy
 * @property float|null $ExposurePercentage
 * @property TreatmentOverrides|null $TreatmentOverrides
 */
class ExperimentRunEvent extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     AssociatedDeployment?: string|null,
     *     EventType?: 'RUN_STARTED'|'EXPOSURE_UPDATED'|'OVERRIDES_UPDATED'|'RUN_STOPPED'|null,
     *     OccurredAt?: \Aws\Api\DateTimeResult|null,
     *     TriggeredBy?: 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR'|null,
     *     ExposurePercentage?: float|null,
     *     TreatmentOverrides?: TreatmentOverrides|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
