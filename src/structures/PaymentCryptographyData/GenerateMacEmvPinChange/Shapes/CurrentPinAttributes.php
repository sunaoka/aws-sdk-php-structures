<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrentPinPekIdentifier
 * @property string $CurrentEncryptedPinBlock
 */
class CurrentPinAttributes extends Shape
{
    /**
     * @param array{
     *     CurrentPinPekIdentifier: string,
     *     CurrentEncryptedPinBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
