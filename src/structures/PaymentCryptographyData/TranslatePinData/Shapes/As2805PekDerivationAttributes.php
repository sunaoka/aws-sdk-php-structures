<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SystemTraceAuditNumber
 * @property string $TransactionAmount
 */
class As2805PekDerivationAttributes extends Shape
{
    /**
     * @param array{
     *     SystemTraceAuditNumber: string,
     *     TransactionAmount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
