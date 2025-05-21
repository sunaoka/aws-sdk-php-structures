<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $decisionNumber
 * @property string|null $ppnExceptionDesignationCode
 * @property 'NIK'|'PassportNumber'|'NPWP'|'NITKU'|null $taxRegistrationNumberType
 */
class IndonesiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     decisionNumber?: string|null,
     *     ppnExceptionDesignationCode?: string|null,
     *     taxRegistrationNumberType?: 'NIK'|'PassportNumber'|'NPWP'|'NITKU'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
