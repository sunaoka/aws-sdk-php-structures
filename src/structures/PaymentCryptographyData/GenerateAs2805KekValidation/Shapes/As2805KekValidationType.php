<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAs2805KekValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KekValidationRequest|null $KekValidationRequest
 * @property KekValidationResponse|null $KekValidationResponse
 */
class As2805KekValidationType extends Shape
{
    /**
     * @param array{
     *     KekValidationRequest?: KekValidationRequest|null,
     *     KekValidationResponse?: KekValidationResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
