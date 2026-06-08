<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceS3Location|null $s3Location
 * @property TaxRegistrationDocFile|null $file
 */
class TaxRegistrationDocument extends Shape
{
    /**
     * @param array{
     *     s3Location?: SourceS3Location|null,
     *     file?: TaxRegistrationDocFile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
