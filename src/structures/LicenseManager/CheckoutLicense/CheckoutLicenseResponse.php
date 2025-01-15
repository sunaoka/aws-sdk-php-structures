<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PROVISIONAL'|'PERPETUAL'|null $CheckoutType
 * @property string|null $LicenseConsumptionToken
 * @property list<Shapes\EntitlementData>|null $EntitlementsAllowed
 * @property string|null $SignedToken
 * @property string|null $NodeId
 * @property string|null $IssuedAt
 * @property string|null $Expiration
 * @property string|null $LicenseArn
 */
class CheckoutLicenseResponse extends Response
{
}
