<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthorizationRequestKeyArn
 * @property string $AuthorizationRequestKeyCheckValue
 * @property string|null $CurrentPinPekArn
 * @property string|null $CurrentPinPekKeyCheckValue
 */
class VisaAmexDerivationOutputs extends Shape
{
    /**
     * @param array{
     *     AuthorizationRequestKeyArn: string,
     *     AuthorizationRequestKeyCheckValue: string,
     *     CurrentPinPekArn?: string|null,
     *     CurrentPinPekKeyCheckValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
