<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentFile
 * @property string $documentName
 */
class ExemptionCertificate extends Shape
{
    /**
     * @param array{
     *     documentFile: string,
     *     documentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
