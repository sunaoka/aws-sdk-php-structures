<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistrationDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $prefix
 */
class DestinationS3Location extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
