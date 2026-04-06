<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2;

class ElasticLoadBalancingV2Client extends \Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client
{
    use AddListenerCertificates\AddListenerCertificatesTrait;
    use AddTags\AddTagsTrait;
    use AddTrustStoreRevocations\AddTrustStoreRevocationsTrait;
    use CreateListener\CreateListenerTrait;
    use CreateLoadBalancer\CreateLoadBalancerTrait;
    use CreateRule\CreateRuleTrait;
    use CreateTargetGroup\CreateTargetGroupTrait;
    use CreateTrustStore\CreateTrustStoreTrait;
    use DeleteListener\DeleteListenerTrait;
    use DeleteLoadBalancer\DeleteLoadBalancerTrait;
    use DeleteRule\DeleteRuleTrait;
    use DeleteSharedTrustStoreAssociation\DeleteSharedTrustStoreAssociationTrait;
    use DeleteTargetGroup\DeleteTargetGroupTrait;
    use DeleteTrustStore\DeleteTrustStoreTrait;
    use DeregisterTargets\DeregisterTargetsTrait;
    use DescribeAccountLimits\DescribeAccountLimitsTrait;
    use DescribeCapacityReservation\DescribeCapacityReservationTrait;
    use DescribeListenerAttributes\DescribeListenerAttributesTrait;
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
    use DescribeTrustStoreAssociations\DescribeTrustStoreAssociationsTrait;
    use DescribeTrustStoreRevocations\DescribeTrustStoreRevocationsTrait;
    use DescribeTrustStores\DescribeTrustStoresTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetTrustStoreCaCertificatesBundle\GetTrustStoreCaCertificatesBundleTrait;
    use GetTrustStoreRevocationContent\GetTrustStoreRevocationContentTrait;
    use ModifyCapacityReservation\ModifyCapacityReservationTrait;
    use ModifyIpPools\ModifyIpPoolsTrait;
    use ModifyListener\ModifyListenerTrait;
    use ModifyListenerAttributes\ModifyListenerAttributesTrait;
    use ModifyLoadBalancerAttributes\ModifyLoadBalancerAttributesTrait;
    use ModifyRule\ModifyRuleTrait;
    use ModifyTargetGroup\ModifyTargetGroupTrait;
    use ModifyTargetGroupAttributes\ModifyTargetGroupAttributesTrait;
    use ModifyTrustStore\ModifyTrustStoreTrait;
    use RegisterTargets\RegisterTargetsTrait;
    use RemoveListenerCertificates\RemoveListenerCertificatesTrait;
    use RemoveTags\RemoveTagsTrait;
    use RemoveTrustStoreRevocations\RemoveTrustStoreRevocationsTrait;
    use SetIpAddressType\SetIpAddressTypeTrait;
    use SetRulePriorities\SetRulePrioritiesTrait;
    use SetSecurityGroups\SetSecurityGroupsTrait;
    use SetSubnets\SetSubnetsTrait;
}
