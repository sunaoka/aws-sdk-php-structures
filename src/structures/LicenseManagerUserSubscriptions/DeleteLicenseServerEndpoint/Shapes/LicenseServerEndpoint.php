<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeleteLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityProviderArn
 * @property 'RDS_SAL'|null $ServerType
 * @property ServerEndpoint|null $ServerEndpoint
 * @property string|null $StatusMessage
 * @property string|null $LicenseServerEndpointId
 * @property string|null $LicenseServerEndpointArn
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null $LicenseServerEndpointProvisioningStatus
 * @property list<LicenseServer>|null $LicenseServers
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class LicenseServerEndpoint extends Shape
{
    /**
     * @param array{
     *     IdentityProviderArn?: string|null,
     *     ServerType?: 'RDS_SAL'|null,
     *     ServerEndpoint?: ServerEndpoint|null,
     *     StatusMessage?: string|null,
     *     LicenseServerEndpointId?: string|null,
     *     LicenseServerEndpointArn?: string|null,
     *     LicenseServerEndpointProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null,
     *     LicenseServers?: list<LicenseServer>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
