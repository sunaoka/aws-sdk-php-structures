<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PROVISIONAL'|'PERPETUAL' $CheckoutType
 * @property string $LicenseConsumptionToken
 * @property list<Shapes\EntitlementData> $EntitlementsAllowed
 * @property string $SignedToken
 * @property string $NodeId
 * @property string $IssuedAt
 * @property string $Expiration
 * @property string $LicenseArn
 */
class CheckoutLicenseResponse extends Response
{
}
