<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceIdentifierPrefix
 * @property list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'>|null $ResourceTypes
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null $TelemetryConfigurationState
 * @property array<string, string>|null $ResourceTags
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceTelemetryRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifierPrefix?: string|null,
     *     ResourceTypes?: list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'>|null,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null,
     *     ResourceTags?: array<string, string>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
