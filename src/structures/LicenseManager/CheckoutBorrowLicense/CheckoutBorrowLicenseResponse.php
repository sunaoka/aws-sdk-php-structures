<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LicenseArn
 * @property string|null $LicenseConsumptionToken
 * @property list<Shapes\EntitlementData>|null $EntitlementsAllowed
 * @property string|null $NodeId
 * @property string|null $SignedToken
 * @property string|null $IssuedAt
 * @property string|null $Expiration
 * @property list<Shapes\Metadata>|null $CheckoutMetadata
 */
class CheckoutBorrowLicenseResponse extends Response
{
}
