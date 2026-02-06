<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateProvisioningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FLEET_PROVISIONING'|'JITR' $ProvisioningType
 * @property string|null $CaCertificate
 * @property string|null $ClaimCertificate
 * @property string|null $Name
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateProvisioningProfileRequest extends Request
{
    /**
     * @param array{
     *     ProvisioningType: 'FLEET_PROVISIONING'|'JITR',
     *     CaCertificate?: string|null,
     *     ClaimCertificate?: string|null,
     *     Name?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
