<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LicenseArn
 * @property string $LicenseConsumptionToken
 * @property list<Shapes\EntitlementData> $EntitlementsAllowed
 * @property string $NodeId
 * @property string $SignedToken
 * @property string $IssuedAt
 * @property string $Expiration
 * @property list<Shapes\Metadata> $CheckoutMetadata
 */
class CheckoutBorrowLicenseResponse extends Response
{
}
