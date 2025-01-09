<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetryForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountIdentifier
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'> $TelemetryConfigurationState
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function' $ResourceType
 * @property string $ResourceIdentifier
 * @property array<string, string> $ResourceTags
 * @property int $LastUpdateTimeStamp
 */
class TelemetryConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountIdentifier?: string,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>,
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function',
     *     ResourceIdentifier?: string,
     *     ResourceTags?: array<string, string>,
     *     LastUpdateTimeStamp?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
