<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmvCommonAttributes $EmvCommon
 * @property AmexAttributes $Amex
 * @property VisaAttributes $Visa
 * @property Emv2000Attributes $Emv2000
 * @property MasterCardAttributes $Mastercard
 */
class DerivationMethodAttributes extends Shape
{
    /**
     * @param array{
     *     EmvCommon?: EmvCommonAttributes,
     *     Amex?: AmexAttributes,
     *     Visa?: VisaAttributes,
     *     Emv2000?: Emv2000Attributes,
     *     Mastercard?: MasterCardAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
