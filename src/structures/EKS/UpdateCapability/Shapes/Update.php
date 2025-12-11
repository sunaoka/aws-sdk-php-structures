<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'InProgress'|'Failed'|'Cancelled'|'Successful'|null $status
 * @property 'VersionUpdate'|'EndpointAccessUpdate'|'LoggingUpdate'|'ConfigUpdate'|'AssociateIdentityProviderConfig'|'DisassociateIdentityProviderConfig'|'AssociateEncryptionConfig'|'AddonUpdate'|'VpcConfigUpdate'|'AccessConfigUpdate'|'UpgradePolicyUpdate'|'ZonalShiftConfigUpdate'|'AutoModeUpdate'|'RemoteNetworkConfigUpdate'|'DeletionProtectionUpdate'|'ControlPlaneScalingConfigUpdate'|null $type
 * @property list<UpdateParam>|null $params
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<ErrorDetail>|null $errors
 */
class Update extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     status?: 'InProgress'|'Failed'|'Cancelled'|'Successful'|null,
     *     type?: 'VersionUpdate'|'EndpointAccessUpdate'|'LoggingUpdate'|'ConfigUpdate'|'AssociateIdentityProviderConfig'|'DisassociateIdentityProviderConfig'|'AssociateEncryptionConfig'|'AddonUpdate'|'VpcConfigUpdate'|'AccessConfigUpdate'|'UpgradePolicyUpdate'|'ZonalShiftConfigUpdate'|'AutoModeUpdate'|'RemoteNetworkConfigUpdate'|'DeletionProtectionUpdate'|'ControlPlaneScalingConfigUpdate'|null,
     *     params?: list<UpdateParam>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     errors?: list<ErrorDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
