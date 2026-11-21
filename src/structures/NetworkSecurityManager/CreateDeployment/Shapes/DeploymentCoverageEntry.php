<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAF'|'SHIELD_ADVANCED'|'IGW_FIREWALL' $firewallType
 * @property list<string> $policyArns
 * @property list<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet'> $inScopeResourceTypes
 */
class DeploymentCoverageEntry extends Shape
{
    /**
     * @param array{
     *     firewallType: 'WAF'|'SHIELD_ADVANCED'|'IGW_FIREWALL',
     *     policyArns: list<string>,
     *     inScopeResourceTypes: list<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
