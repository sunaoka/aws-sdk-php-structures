<?php

namespace Sunaoka\Aws\Structures\EKS;

class EKSClient extends \Aws\EKS\EKSClient
{
    use AssociateEncryptionConfig\AssociateEncryptionConfigTrait;
    use AssociateIdentityProviderConfig\AssociateIdentityProviderConfigTrait;
    use CreateAddon\CreateAddonTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateFargateProfile\CreateFargateProfileTrait;
    use CreateNodegroup\CreateNodegroupTrait;
    use DeleteAddon\DeleteAddonTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteFargateProfile\DeleteFargateProfileTrait;
    use DeleteNodegroup\DeleteNodegroupTrait;
    use DeregisterCluster\DeregisterClusterTrait;
    use DescribeAddon\DescribeAddonTrait;
    use DescribeAddonConfiguration\DescribeAddonConfigurationTrait;
    use DescribeAddonVersions\DescribeAddonVersionsTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeFargateProfile\DescribeFargateProfileTrait;
    use DescribeIdentityProviderConfig\DescribeIdentityProviderConfigTrait;
    use DescribeNodegroup\DescribeNodegroupTrait;
    use DescribeUpdate\DescribeUpdateTrait;
    use DisassociateIdentityProviderConfig\DisassociateIdentityProviderConfigTrait;
    use ListAddons\ListAddonsTrait;
    use ListClusters\ListClustersTrait;
    use ListFargateProfiles\ListFargateProfilesTrait;
    use ListIdentityProviderConfigs\ListIdentityProviderConfigsTrait;
    use ListNodegroups\ListNodegroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUpdates\ListUpdatesTrait;
    use RegisterCluster\RegisterClusterTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAddon\UpdateAddonTrait;
    use UpdateClusterConfig\UpdateClusterConfigTrait;
    use UpdateClusterVersion\UpdateClusterVersionTrait;
    use UpdateNodegroupConfig\UpdateNodegroupConfigTrait;
    use UpdateNodegroupVersion\UpdateNodegroupVersionTrait;
}
