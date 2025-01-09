<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileContent
 * @property string $fileName
 */
class TaxRegistrationDocFile extends Shape
{
    /**
     * @param array{
     *     fileContent: string,
     *     fileName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
