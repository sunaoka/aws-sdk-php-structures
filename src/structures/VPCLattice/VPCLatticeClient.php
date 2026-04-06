<?php

namespace Sunaoka\Aws\Structures\VPCLattice;

class VPCLatticeClient extends \Aws\VPCLattice\VPCLatticeClient
{
    use BatchUpdateRule\BatchUpdateRuleTrait;
    use CreateAccessLogSubscription\CreateAccessLogSubscriptionTrait;
    use CreateListener\CreateListenerTrait;
    use CreateRule\CreateRuleTrait;
    use CreateService\CreateServiceTrait;
    use CreateServiceNetwork\CreateServiceNetworkTrait;
    use CreateServiceNetworkServiceAssociation\CreateServiceNetworkServiceAssociationTrait;
    use CreateServiceNetworkVpcAssociation\CreateServiceNetworkVpcAssociationTrait;
    use CreateTargetGroup\CreateTargetGroupTrait;
    use DeleteAccessLogSubscription\DeleteAccessLogSubscriptionTrait;
    use DeleteAuthPolicy\DeleteAuthPolicyTrait;
    use DeleteListener\DeleteListenerTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRule\DeleteRuleTrait;
    use DeleteService\DeleteServiceTrait;
    use DeleteServiceNetwork\DeleteServiceNetworkTrait;
    use DeleteServiceNetworkServiceAssociation\DeleteServiceNetworkServiceAssociationTrait;
    use DeleteServiceNetworkVpcAssociation\DeleteServiceNetworkVpcAssociationTrait;
    use DeleteTargetGroup\DeleteTargetGroupTrait;
    use DeregisterTargets\DeregisterTargetsTrait;
    use GetAccessLogSubscription\GetAccessLogSubscriptionTrait;
    use GetAuthPolicy\GetAuthPolicyTrait;
    use GetListener\GetListenerTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetRule\GetRuleTrait;
    use GetService\GetServiceTrait;
    use GetServiceNetwork\GetServiceNetworkTrait;
    use GetServiceNetworkServiceAssociation\GetServiceNetworkServiceAssociationTrait;
    use GetServiceNetworkVpcAssociation\GetServiceNetworkVpcAssociationTrait;
    use GetTargetGroup\GetTargetGroupTrait;
    use ListAccessLogSubscriptions\ListAccessLogSubscriptionsTrait;
    use ListListeners\ListListenersTrait;
    use ListRules\ListRulesTrait;
    use ListServiceNetworkServiceAssociations\ListServiceNetworkServiceAssociationsTrait;
    use ListServiceNetworkVpcAssociations\ListServiceNetworkVpcAssociationsTrait;
    use ListServiceNetworks\ListServiceNetworksTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetGroups\ListTargetGroupsTrait;
    use ListTargets\ListTargetsTrait;
    use PutAuthPolicy\PutAuthPolicyTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RegisterTargets\RegisterTargetsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccessLogSubscription\UpdateAccessLogSubscriptionTrait;
    use UpdateListener\UpdateListenerTrait;
    use UpdateRule\UpdateRuleTrait;
    use UpdateService\UpdateServiceTrait;
    use UpdateServiceNetwork\UpdateServiceNetworkTrait;
    use UpdateServiceNetworkVpcAssociation\UpdateServiceNetworkVpcAssociationTrait;
    use UpdateTargetGroup\UpdateTargetGroupTrait;
}
