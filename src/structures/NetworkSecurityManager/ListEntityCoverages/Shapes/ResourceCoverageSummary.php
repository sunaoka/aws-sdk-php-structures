<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListEntityCoverages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property 'Rule'|'Template'|'Policy'|'Deployment'|'Scope'|null $entityType
 * @property string|null $entityArn
 * @property string|null $resourceOwnerAccountId
 * @property 'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet'|null $resourceType
 * @property 'WAF'|'SHIELD_ADVANCED'|'IGW_FIREWALL'|null $firewallType
 * @property 'IN_EFFECT'|'SUPERSEDED'|null $coverageStatus
 * @property list<string>|null $deploymentArns
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ResourceCoverageSummary extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     entityType?: 'Rule'|'Template'|'Policy'|'Deployment'|'Scope'|null,
     *     entityArn?: string|null,
     *     resourceOwnerAccountId?: string|null,
     *     resourceType?: 'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet'|null,
     *     firewallType?: 'WAF'|'SHIELD_ADVANCED'|'IGW_FIREWALL'|null,
     *     coverageStatus?: 'IN_EFFECT'|'SUPERSEDED'|null,
     *     deploymentArns?: list<string>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
