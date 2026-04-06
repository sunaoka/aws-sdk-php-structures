<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionKeyEmvCommon|null $EmvCommon
 * @property SessionKeyMastercard|null $Mastercard
 * @property SessionKeyEmv2000|null $Emv2000
 * @property SessionKeyAmex|null $Amex
 * @property SessionKeyVisa|null $Visa
 */
class SessionKeyDerivation extends Shape
{
    /**
     * @param array{
     *     EmvCommon?: SessionKeyEmvCommon|null,
     *     Mastercard?: SessionKeyMastercard|null,
     *     Emv2000?: SessionKeyEmv2000|null,
     *     Amex?: SessionKeyAmex|null,
     *     Visa?: SessionKeyVisa|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
