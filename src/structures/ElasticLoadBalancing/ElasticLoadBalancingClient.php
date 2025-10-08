<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing;

class ElasticLoadBalancingClient extends \Aws\ElasticLoadBalancing\ElasticLoadBalancingClient
{
    use AddTags\AddTagsTrait;
    use ApplySecurityGroupsToLoadBalancer\ApplySecurityGroupsToLoadBalancerTrait;
    use AttachLoadBalancerToSubnets\AttachLoadBalancerToSubnetsTrait;
    use ConfigureHealthCheck\ConfigureHealthCheckTrait;
    use CreateAppCookieStickinessPolicy\CreateAppCookieStickinessPolicyTrait;
    use CreateLBCookieStickinessPolicy\CreateLBCookieStickinessPolicyTrait;
    use CreateLoadBalancer\CreateLoadBalancerTrait;
    use CreateLoadBalancerListeners\CreateLoadBalancerListenersTrait;
    use CreateLoadBalancerPolicy\CreateLoadBalancerPolicyTrait;
    use DeleteLoadBalancer\DeleteLoadBalancerTrait;
    use DeleteLoadBalancerListeners\DeleteLoadBalancerListenersTrait;
    use DeleteLoadBalancerPolicy\DeleteLoadBalancerPolicyTrait;
    use DeregisterInstancesFromLoadBalancer\DeregisterInstancesFromLoadBalancerTrait;
    use DescribeAccountLimits\DescribeAccountLimitsTrait;
    use DescribeInstanceHealth\DescribeInstanceHealthTrait;
    use DescribeLoadBalancerAttributes\DescribeLoadBalancerAttributesTrait;
    use DescribeLoadBalancerPolicies\DescribeLoadBalancerPoliciesTrait;
    use DescribeLoadBalancerPolicyTypes\DescribeLoadBalancerPolicyTypesTrait;
    use DescribeLoadBalancers\DescribeLoadBalancersTrait;
    use DescribeTags\DescribeTagsTrait;
    use DetachLoadBalancerFromSubnets\DetachLoadBalancerFromSubnetsTrait;
    use DisableAvailabilityZonesForLoadBalancer\DisableAvailabilityZonesForLoadBalancerTrait;
    use EnableAvailabilityZonesForLoadBalancer\EnableAvailabilityZonesForLoadBalancerTrait;
    use ModifyLoadBalancerAttributes\ModifyLoadBalancerAttributesTrait;
    use RegisterInstancesWithLoadBalancer\RegisterInstancesWithLoadBalancerTrait;
    use RemoveTags\RemoveTagsTrait;
    use SetLoadBalancerListenerSSLCertificate\SetLoadBalancerListenerSSLCertificateTrait;
    use SetLoadBalancerPoliciesForBackendServer\SetLoadBalancerPoliciesForBackendServerTrait;
    use SetLoadBalancerPoliciesOfListener\SetLoadBalancerPoliciesOfListenerTrait;
}
