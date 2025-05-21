<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateProvisioningProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'FLEET_PROVISIONING'|'JITR'|null $ProvisioningType
 * @property string|null $Id
 * @property string|null $ClaimCertificate
 * @property string|null $ClaimCertificatePrivateKey
 */
class CreateProvisioningProfileResponse extends Response
{
}
