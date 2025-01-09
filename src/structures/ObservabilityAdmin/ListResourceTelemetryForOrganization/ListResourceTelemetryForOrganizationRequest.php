<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetryForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIdentifiers
 * @property string $ResourceIdentifierPrefix
 * @property list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'> $ResourceTypes
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'> $TelemetryConfigurationState
 * @property array<string, string> $ResourceTags
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListResourceTelemetryForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     AccountIdentifiers?: list<string>,
     *     ResourceIdentifierPrefix?: string,
     *     ResourceTypes?: list<'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'>,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>,
     *     ResourceTags?: array<string, string>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
