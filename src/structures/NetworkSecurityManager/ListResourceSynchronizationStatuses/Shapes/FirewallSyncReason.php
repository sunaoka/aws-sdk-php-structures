<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $missingFirewall
 * @property InvalidFirewallReasons|null $invalidFirewall
 * @property array<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet', list<InvalidResourceIssue>>|null $invalidResource
 */
class FirewallSyncReason extends Shape
{
    /**
     * @param array{
     *     missingFirewall?: string|null,
     *     invalidFirewall?: InvalidFirewallReasons|null,
     *     invalidResource?: array<'AWS::ApiGateway::Stage'|'AWS::CloudFront::Distribution'|'AWS::EC2::EIP'|'AWS::ElasticLoadBalancingV2::LoadBalancer::application'|'AWS::ElasticLoadBalancing::LoadBalancer'|'AWS::EC2::VPC'|'AWS::EC2::Subnet', list<InvalidResourceIssue>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
