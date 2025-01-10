<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $fileContent
 * @property string $fileName
 */
class TaxRegistrationDocFile extends Shape
{
    /**
     * @param array{
     *     fileContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     fileName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
