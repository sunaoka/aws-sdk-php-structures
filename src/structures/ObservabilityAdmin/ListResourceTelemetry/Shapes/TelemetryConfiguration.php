<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountIdentifier
 * @property array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null $TelemetryConfigurationState
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null $ResourceType
 * @property string|null $ResourceIdentifier
 * @property array<string, string>|null $ResourceTags
 * @property int|null $LastUpdateTimeStamp
 * @property 'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'|null $TelemetrySourceType
 */
class TelemetryConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountIdentifier?: string|null,
     *     TelemetryConfigurationState?: array<'Logs'|'Metrics'|'Traces', 'Enabled'|'Disabled'|'NotApplicable'>|null,
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null,
     *     ResourceIdentifier?: string|null,
     *     ResourceTags?: array<string, string>|null,
     *     LastUpdateTimeStamp?: int|null,
     *     TelemetrySourceType?: 'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
