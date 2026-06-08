<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NIK'|'PassportNumber'|'NPWP'|'NITKU'|null $taxRegistrationNumberType
 * @property string|null $ppnExceptionDesignationCode
 * @property string|null $decisionNumber
 */
class IndonesiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxRegistrationNumberType?: 'NIK'|'PassportNumber'|'NPWP'|'NITKU'|null,
     *     ppnExceptionDesignationCode?: string|null,
     *     decisionNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
