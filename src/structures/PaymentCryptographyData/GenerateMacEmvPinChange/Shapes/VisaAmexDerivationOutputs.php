<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthorizationRequestKeyArn
 * @property string $AuthorizationRequestKeyCheckValue
 * @property string $CurrentPinPekArn
 * @property string $CurrentPinPekKeyCheckValue
 */
class VisaAmexDerivationOutputs extends Shape
{
    /**
     * @param array{
     *     AuthorizationRequestKeyArn: string,
     *     AuthorizationRequestKeyCheckValue: string,
     *     CurrentPinPekArn?: string,
     *     CurrentPinPekKeyCheckValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
