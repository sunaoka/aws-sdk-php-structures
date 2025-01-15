<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountIdentifier
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null $TelemetryConfigurationState
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null $ResourceType
 * @property string|null $ResourceIdentifier
 * @property array<string, string>|null $ResourceTags
 * @property int|null $LastUpdateTimeStamp
 */
class TelemetryConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountIdentifier?: string|null,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null,
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null,
     *     ResourceIdentifier?: string|null,
     *     ResourceTags?: array<string, string>|null,
     *     LastUpdateTimeStamp?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
