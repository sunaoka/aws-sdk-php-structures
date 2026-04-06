<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceS3Location $s3Location
 */
class TaxRegistrationDocument extends Shape
{
    /**
     * @param array{s3Location: SourceS3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
