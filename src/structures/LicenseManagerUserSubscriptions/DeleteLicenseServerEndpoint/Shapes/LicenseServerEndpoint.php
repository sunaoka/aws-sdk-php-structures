<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeleteLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $IdentityProviderArn
 * @property string|null $LicenseServerEndpointArn
 * @property string|null $LicenseServerEndpointId
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null $LicenseServerEndpointProvisioningStatus
 * @property list<LicenseServer>|null $LicenseServers
 * @property ServerEndpoint|null $ServerEndpoint
 * @property 'RDS_SAL'|null $ServerType
 * @property string|null $StatusMessage
 */
class LicenseServerEndpoint extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     IdentityProviderArn?: string|null,
     *     LicenseServerEndpointArn?: string|null,
     *     LicenseServerEndpointId?: string|null,
     *     LicenseServerEndpointProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null,
     *     LicenseServers?: list<LicenseServer>|null,
     *     ServerEndpoint?: ServerEndpoint|null,
     *     ServerType?: 'RDS_SAL'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
