<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null $ResourceType
 * @property 'Logs'|'Metrics'|'Traces' $TelemetryType
 * @property list<'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'>|null $TelemetrySourceTypes
 * @property TelemetryDestinationConfiguration|null $DestinationConfiguration
 * @property string|null $Scope
 * @property string|null $SelectionCriteria
 */
class TelemetryRule extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null,
     *     TelemetryType: 'Logs'|'Metrics'|'Traces',
     *     TelemetrySourceTypes?: list<'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'>|null,
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
