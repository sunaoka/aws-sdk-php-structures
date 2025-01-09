<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeleteLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $IdentityProviderArn
 * @property string $LicenseServerEndpointArn
 * @property string $LicenseServerEndpointId
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED' $LicenseServerEndpointProvisioningStatus
 * @property list<LicenseServer> $LicenseServers
 * @property ServerEndpoint $ServerEndpoint
 * @property 'RDS_SAL' $ServerType
 * @property string $StatusMessage
 */
class LicenseServerEndpoint extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     IdentityProviderArn?: string,
     *     LicenseServerEndpointArn?: string,
     *     LicenseServerEndpointId?: string,
     *     LicenseServerEndpointProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED',
     *     LicenseServers?: list<LicenseServer>,
     *     ServerEndpoint?: ServerEndpoint,
     *     ServerType?: 'RDS_SAL',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
