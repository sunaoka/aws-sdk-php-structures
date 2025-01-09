<?php

namespace Sunaoka\Aws\Structures\EKS\DisassociateIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Version'|'PlatformVersion'|'EndpointPrivateAccess'|'EndpointPublicAccess'|'ClusterLogging'|'DesiredSize'|'LabelsToAdd'|'LabelsToRemove'|'TaintsToAdd'|'TaintsToRemove'|'MaxSize'|'MinSize'|'ReleaseVersion'|'PublicAccessCidrs'|'LaunchTemplateName'|'LaunchTemplateVersion'|'IdentityProviderConfig'|'EncryptionConfig'|'AddonVersion'|'ServiceAccountRoleArn'|'ResolveConflicts'|'MaxUnavailable'|'MaxUnavailablePercentage'|'NodeRepairEnabled'|'ConfigurationValues'|'SecurityGroups'|'Subnets'|'AuthenticationMode'|'PodIdentityAssociations'|'UpgradePolicy'|'ZonalShiftConfig'|'ComputeConfig'|'StorageConfig'|'KubernetesNetworkConfig' $type
 * @property string $value
 */
class UpdateParam extends Shape
{
    /**
     * @param array{
     *     type?: 'Version'|'PlatformVersion'|'EndpointPrivateAccess'|'EndpointPublicAccess'|'ClusterLogging'|'DesiredSize'|'LabelsToAdd'|'LabelsToRemove'|'TaintsToAdd'|'TaintsToRemove'|'MaxSize'|'MinSize'|'ReleaseVersion'|'PublicAccessCidrs'|'LaunchTemplateName'|'LaunchTemplateVersion'|'IdentityProviderConfig'|'EncryptionConfig'|'AddonVersion'|'ServiceAccountRoleArn'|'ResolveConflicts'|'MaxUnavailable'|'MaxUnavailablePercentage'|'NodeRepairEnabled'|'ConfigurationValues'|'SecurityGroups'|'Subnets'|'AuthenticationMode'|'PodIdentityAssociations'|'UpgradePolicy'|'ZonalShiftConfig'|'ComputeConfig'|'StorageConfig'|'KubernetesNetworkConfig',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
