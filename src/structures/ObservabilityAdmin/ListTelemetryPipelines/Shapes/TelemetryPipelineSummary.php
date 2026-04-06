<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CreatedTimeStamp
 * @property int|null $LastUpdateTimeStamp
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $Status
 * @property array<string, string>|null $Tags
 * @property ConfigurationSummary|null $ConfigurationSummary
 */
class TelemetryPipelineSummary extends Shape
{
    /**
     * @param array{
     *     CreatedTimeStamp?: int|null,
     *     LastUpdateTimeStamp?: int|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     Tags?: array<string, string>|null,
     *     ConfigurationSummary?: ConfigurationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
