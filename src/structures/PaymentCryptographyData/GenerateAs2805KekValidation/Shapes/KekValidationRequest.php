<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAs2805KekValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224' $DeriveKeyAlgorithm
 */
class KekValidationRequest extends Shape
{
    /**
     * @param array{DeriveKeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
