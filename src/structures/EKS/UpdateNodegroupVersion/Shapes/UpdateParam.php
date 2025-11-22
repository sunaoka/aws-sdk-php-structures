<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Version'|'PlatformVersion'|'EndpointPrivateAccess'|'EndpointPublicAccess'|'ClusterLogging'|'DesiredSize'|'LabelsToAdd'|'LabelsToRemove'|'TaintsToAdd'|'TaintsToRemove'|'MaxSize'|'MinSize'|'ReleaseVersion'|'PublicAccessCidrs'|'LaunchTemplateName'|'LaunchTemplateVersion'|'IdentityProviderConfig'|'EncryptionConfig'|'AddonVersion'|'ServiceAccountRoleArn'|'ResolveConflicts'|'MaxUnavailable'|'MaxUnavailablePercentage'|'NodeRepairEnabled'|'UpdateStrategy'|'ConfigurationValues'|'SecurityGroups'|'Subnets'|'AuthenticationMode'|'PodIdentityAssociations'|'UpgradePolicy'|'ZonalShiftConfig'|'ComputeConfig'|'StorageConfig'|'KubernetesNetworkConfig'|'RemoteNetworkConfig'|'DeletionProtection'|'NodeRepairConfig'|'UpdatedTier'|'PreviousTier'|null $type
 * @property string|null $value
 */
class UpdateParam extends Shape
{
    /**
     * @param array{
     *     type?: 'Version'|'PlatformVersion'|'EndpointPrivateAccess'|'EndpointPublicAccess'|'ClusterLogging'|'DesiredSize'|'LabelsToAdd'|'LabelsToRemove'|'TaintsToAdd'|'TaintsToRemove'|'MaxSize'|'MinSize'|'ReleaseVersion'|'PublicAccessCidrs'|'LaunchTemplateName'|'LaunchTemplateVersion'|'IdentityProviderConfig'|'EncryptionConfig'|'AddonVersion'|'ServiceAccountRoleArn'|'ResolveConflicts'|'MaxUnavailable'|'MaxUnavailablePercentage'|'NodeRepairEnabled'|'UpdateStrategy'|'ConfigurationValues'|'SecurityGroups'|'Subnets'|'AuthenticationMode'|'PodIdentityAssociations'|'UpgradePolicy'|'ZonalShiftConfig'|'ComputeConfig'|'StorageConfig'|'KubernetesNetworkConfig'|'RemoteNetworkConfig'|'DeletionProtection'|'NodeRepairConfig'|'UpdatedTier'|'PreviousTier'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
