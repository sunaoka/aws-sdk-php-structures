<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifierPrefix
 * @property list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'> $ResourceTypes
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'> $TelemetryConfigurationState
 * @property array<string, string> $ResourceTags
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListResourceTelemetryRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifierPrefix?: string,
     *     ResourceTypes?: list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'>,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>,
     *     ResourceTags?: array<string, string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
