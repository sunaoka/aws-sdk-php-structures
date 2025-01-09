<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'InProgress'|'Failed'|'Cancelled'|'Successful' $status
 * @property 'VersionUpdate'|'EndpointAccessUpdate'|'LoggingUpdate'|'ConfigUpdate'|'AssociateIdentityProviderConfig'|'DisassociateIdentityProviderConfig'|'AssociateEncryptionConfig'|'AddonUpdate'|'VpcConfigUpdate'|'AccessConfigUpdate'|'UpgradePolicyUpdate'|'ZonalShiftConfigUpdate'|'AutoModeUpdate' $type
 * @property list<UpdateParam> $params
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<ErrorDetail> $errors
 */
class Update extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     status?: 'InProgress'|'Failed'|'Cancelled'|'Successful',
     *     type?: 'VersionUpdate'|'EndpointAccessUpdate'|'LoggingUpdate'|'ConfigUpdate'|'AssociateIdentityProviderConfig'|'DisassociateIdentityProviderConfig'|'AssociateEncryptionConfig'|'AddonUpdate'|'VpcConfigUpdate'|'AccessConfigUpdate'|'UpgradePolicyUpdate'|'ZonalShiftConfigUpdate'|'AutoModeUpdate',
     *     params?: list<UpdateParam>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     errors?: list<ErrorDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
