<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAF'|'SHIELD_ADVANCED' $firewallType
 * @property list<string> $policyArns
 * @property list<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'> $inScopeResourceTypes
 */
class DeploymentCoverageEntry extends Shape
{
    /**
     * @param array{
     *     firewallType: 'WAF'|'SHIELD_ADVANCED',
     *     policyArns: list<string>,
     *     inScopeResourceTypes: list<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
