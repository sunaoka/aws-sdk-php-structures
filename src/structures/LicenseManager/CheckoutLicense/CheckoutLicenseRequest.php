<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductSKU
 * @property 'PROVISIONAL'|'PERPETUAL' $CheckoutType
 * @property string $KeyFingerprint
 * @property list<Shapes\EntitlementData> $Entitlements
 * @property string $ClientToken
 * @property string $Beneficiary
 * @property string $NodeId
 */
class CheckoutLicenseRequest extends Request
{
    /**
     * @param array{
     *     ProductSKU: string,
     *     CheckoutType: 'PROVISIONAL'|'PERPETUAL',
     *     KeyFingerprint: string,
     *     Entitlements: list<Shapes\EntitlementData>,
     *     ClientToken: string,
     *     Beneficiary?: string,
     *     NodeId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
