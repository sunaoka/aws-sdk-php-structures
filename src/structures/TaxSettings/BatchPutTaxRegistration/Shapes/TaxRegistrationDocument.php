<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaxRegistrationDocFile|null $file
 * @property SourceS3Location|null $s3Location
 */
class TaxRegistrationDocument extends Shape
{
    /**
     * @param array{
     *     file?: TaxRegistrationDocFile|null,
     *     s3Location?: SourceS3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
