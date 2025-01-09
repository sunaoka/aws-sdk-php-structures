<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionKeyEmvCommon $EmvCommon
 * @property SessionKeyMastercard $Mastercard
 * @property SessionKeyEmv2000 $Emv2000
 * @property SessionKeyAmex $Amex
 * @property SessionKeyVisa $Visa
 */
class SessionKeyDerivation extends Shape
{
    /**
     * @param array{
     *     EmvCommon?: SessionKeyEmvCommon,
     *     Mastercard?: SessionKeyMastercard,
     *     Emv2000?: SessionKeyEmv2000,
     *     Amex?: SessionKeyAmex,
     *     Visa?: SessionKeyVisa
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
