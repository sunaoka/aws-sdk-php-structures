<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property string|null $RuleArn
 * @property int|null $CreatedTimeStamp
 * @property int|null $LastUpdateTimeStamp
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null $ResourceType
 * @property 'Logs'|'Metrics'|'Traces'|null $TelemetryType
 * @property list<'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'>|null $TelemetrySourceTypes
 */
class TelemetryRuleSummary extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleArn?: string|null,
     *     CreatedTimeStamp?: int|null,
     *     LastUpdateTimeStamp?: int|null,
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|'AWS::CloudTrail'|'AWS::EKS::Cluster'|'AWS::WAFv2::WebACL'|'AWS::ElasticLoadBalancingV2::LoadBalancer'|'AWS::Route53Resolver::ResolverEndpoint'|'AWS::BedrockAgentCore::Runtime'|'AWS::BedrockAgentCore::Browser'|'AWS::BedrockAgentCore::CodeInterpreter'|null,
     *     TelemetryType?: 'Logs'|'Metrics'|'Traces'|null,
     *     TelemetrySourceTypes?: list<'VPC_FLOW_LOGS'|'ROUTE53_RESOLVER_QUERY_LOGS'|'EKS_AUDIT_LOGS'|'EKS_AUTHENTICATOR_LOGS'|'EKS_CONTROLLER_MANAGER_LOGS'|'EKS_SCHEDULER_LOGS'|'EKS_API_LOGS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
