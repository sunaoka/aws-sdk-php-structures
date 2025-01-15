<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<Shapes\EntitlementData> $Entitlements
 * @property 'JWT_PS384' $DigitalSignatureMethod
 * @property string|null $NodeId
 * @property list<Shapes\Metadata>|null $CheckoutMetadata
 * @property string $ClientToken
 */
class CheckoutBorrowLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     Entitlements: list<Shapes\EntitlementData>,
     *     DigitalSignatureMethod: 'JWT_PS384',
     *     NodeId?: string|null,
     *     CheckoutMetadata?: list<Shapes\Metadata>|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
