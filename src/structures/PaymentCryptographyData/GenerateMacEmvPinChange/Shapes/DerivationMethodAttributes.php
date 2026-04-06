<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmvCommonAttributes|null $EmvCommon
 * @property AmexAttributes|null $Amex
 * @property VisaAttributes|null $Visa
 * @property Emv2000Attributes|null $Emv2000
 * @property MasterCardAttributes|null $Mastercard
 */
class DerivationMethodAttributes extends Shape
{
    /**
     * @param array{
     *     EmvCommon?: EmvCommonAttributes|null,
     *     Amex?: AmexAttributes|null,
     *     Visa?: VisaAttributes|null,
     *     Emv2000?: Emv2000Attributes|null,
     *     Mastercard?: MasterCardAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
