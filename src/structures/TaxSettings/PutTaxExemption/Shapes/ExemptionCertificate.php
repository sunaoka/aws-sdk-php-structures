<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $documentFile
 * @property string $documentName
 */
class ExemptionCertificate extends Shape
{
    /**
     * @param array{
     *     documentFile: string|resource|\Psr\Http\Message\StreamInterface,
     *     documentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
