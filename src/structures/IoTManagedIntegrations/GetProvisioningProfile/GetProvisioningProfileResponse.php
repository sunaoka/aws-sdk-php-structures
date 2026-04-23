<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetProvisioningProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'FLEET_PROVISIONING'|'JITR'|null $ProvisioningType
 * @property string|null $Id
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $Status
 * @property string|null $ClaimCertificate
 * @property array<string, string>|null $Tags
 */
class GetProvisioningProfileResponse extends Response
{
}
