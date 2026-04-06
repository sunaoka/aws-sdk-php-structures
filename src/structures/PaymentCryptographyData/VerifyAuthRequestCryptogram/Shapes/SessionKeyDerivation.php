<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionKeyAmex|null $Amex
 * @property SessionKeyEmv2000|null $Emv2000
 * @property SessionKeyEmvCommon|null $EmvCommon
 * @property SessionKeyMastercard|null $Mastercard
 * @property SessionKeyVisa|null $Visa
 */
class SessionKeyDerivation extends Shape
{
    /**
     * @param array{
     *     Amex?: SessionKeyAmex|null,
     *     Emv2000?: SessionKeyEmv2000|null,
     *     EmvCommon?: SessionKeyEmvCommon|null,
     *     Mastercard?: SessionKeyMastercard|null,
     *     Visa?: SessionKeyVisa|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
