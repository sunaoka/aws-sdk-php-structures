<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2;

class ElasticLoadBalancingV2Client extends \Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client
{
    use AddListenerCertificates\AddListenerCertificatesTrait;
    use AddTags\AddTagsTrait;
    use CreateListener\CreateListenerTrait;
    use CreateLoadBalancer\CreateLoadBalancerTrait;
    use CreateRule\CreateRuleTrait;
    use CreateTargetGroup\CreateTargetGroupTrait;
    use DeleteListener\DeleteListenerTrait;
    use DeleteLoadBalancer\DeleteLoadBalancerTrait;
    use DeleteRule\DeleteRuleTrait;
    use DeleteTargetGroup\DeleteTargetGroupTrait;
    use DeregisterTargets\DeregisterTargetsTrait;
    use DescribeAccountLimits\DescribeAccountLimitsTrait;
    use DescribeListenerCertificates\DescribeListenerCertificatesTrait;
    use DescribeListeners\DescribeListenersTrait;
    use DescribeLoadBalancerAttributes\DescribeLoadBalancerAttributesTrait;
    use DescribeLoadBalancers\DescribeLoadBalancersTrait;
    use DescribeRules\DescribeRulesTrait;
    use DescribeSSLPolicies\DescribeSSLPoliciesTrait;
    use DescribeTags\DescribeTagsTrait;
    use DescribeTargetGroupAttributes\DescribeTargetGroupAttributesTrait;
    use DescribeTargetGroups\DescribeTargetGroupsTrait;
    use DescribeTargetHealth\DescribeTargetHealthTrait;
    use ModifyListener\ModifyListenerTrait;
    use ModifyLoadBalancerAttributes\ModifyLoadBalancerAttributesTrait;
    use ModifyRule\ModifyRuleTrait;
    use ModifyTargetGroup\ModifyTargetGroupTrait;
    use ModifyTargetGroupAttributes\ModifyTargetGroupAttributesTrait;
    use RegisterTargets\RegisterTargetsTrait;
    use RemoveListenerCertificates\RemoveListenerCertificatesTrait;
    use RemoveTags\RemoveTagsTrait;
    use SetIpAddressType\SetIpAddressTypeTrait;
    use SetRulePriorities\SetRulePrioritiesTrait;
    use SetSecurityGroups\SetSecurityGroupsTrait;
    use SetSubnets\SetSubnetsTrait;
}
