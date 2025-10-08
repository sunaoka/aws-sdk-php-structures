<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null $ResourceType
 * @property 'Logs'|'Metrics'|'Traces' $TelemetryType
 * @property TelemetryDestinationConfiguration|null $DestinationConfiguration
 * @property string|null $Scope
 * @property string|null $SelectionCriteria
 */
class TelemetryRule extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null,
     *     TelemetryType: 'Logs'|'Metrics'|'Traces',
     *     DestinationConfiguration?: TelemetryDestinationConfiguration|null,
     *     Scope?: string|null,
     *     SelectionCriteria?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
