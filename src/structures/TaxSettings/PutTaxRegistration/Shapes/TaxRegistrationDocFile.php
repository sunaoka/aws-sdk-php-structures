<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string|resource|\Psr\Http\Message\StreamInterface $fileContent
 */
class TaxRegistrationDocFile extends Shape
{
    /**
     * @param array{
     *     fileName: string,
     *     fileContent: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
