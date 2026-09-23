<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountFilter|null $accountFilter
 * @property array<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer', ResourceScope> $resourceScopes
 */
class ScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     accountFilter?: AccountFilter|null,
     *     resourceScopes: array<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer', ResourceScope>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
