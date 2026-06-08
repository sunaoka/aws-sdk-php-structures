<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentName
 * @property string|resource|\Psr\Http\Message\StreamInterface $documentFile
 */
class ExemptionCertificate extends Shape
{
    /**
     * @param array{
     *     documentName: string,
     *     documentFile: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
