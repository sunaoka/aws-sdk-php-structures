<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 * @property list<Shapes\EntitlementData> $Entitlements
 * @property 'JWT_PS384' $DigitalSignatureMethod
 * @property string $NodeId
 * @property list<Shapes\Metadata> $CheckoutMetadata
 * @property string $ClientToken
 */
class CheckoutBorrowLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseArn: string,
     *     Entitlements: list<Shapes\EntitlementData>,
     *     DigitalSignatureMethod: 'JWT_PS384',
     *     NodeId?: string,
     *     CheckoutMetadata?: list<Shapes\Metadata>,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
