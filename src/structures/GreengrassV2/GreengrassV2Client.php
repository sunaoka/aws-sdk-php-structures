<?php

namespace Sunaoka\Aws\Structures\GreengrassV2;

class GreengrassV2Client extends \Aws\GreengrassV2\GreengrassV2Client
{
    use AssociateServiceRoleToAccount\AssociateServiceRoleToAccountTrait;
    use BatchAssociateClientDeviceWithCoreDevice\BatchAssociateClientDeviceWithCoreDeviceTrait;
    use BatchDisassociateClientDeviceFromCoreDevice\BatchDisassociateClientDeviceFromCoreDeviceTrait;
    use CancelDeployment\CancelDeploymentTrait;
    use CreateComponentVersion\CreateComponentVersionTrait;
    use CreateDeployment\CreateDeploymentTrait;
    use DeleteComponent\DeleteComponentTrait;
    use DeleteCoreDevice\DeleteCoreDeviceTrait;
    use DeleteDeployment\DeleteDeploymentTrait;
    use DescribeComponent\DescribeComponentTrait;
    use DisassociateServiceRoleFromAccount\DisassociateServiceRoleFromAccountTrait;
    use GetComponent\GetComponentTrait;
    use GetComponentVersionArtifact\GetComponentVersionArtifactTrait;
    use GetConnectivityInfo\GetConnectivityInfoTrait;
    use GetCoreDevice\GetCoreDeviceTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetServiceRoleForAccount\GetServiceRoleForAccountTrait;
    use ListClientDevicesAssociatedWithCoreDevice\ListClientDevicesAssociatedWithCoreDeviceTrait;
    use ListComponentVersions\ListComponentVersionsTrait;
    use ListComponents\ListComponentsTrait;
    use ListCoreDevices\ListCoreDevicesTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListEffectiveDeployments\ListEffectiveDeploymentsTrait;
    use ListInstalledComponents\ListInstalledComponentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ResolveComponentCandidates\ResolveComponentCandidatesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConnectivityInfo\UpdateConnectivityInfoTrait;
}
