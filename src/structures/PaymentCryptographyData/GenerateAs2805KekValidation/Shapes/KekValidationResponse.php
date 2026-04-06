<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAs2805KekValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RandomKeySend
 */
class KekValidationResponse extends Shape
{
    /**
     * @param array{RandomKeySend: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
