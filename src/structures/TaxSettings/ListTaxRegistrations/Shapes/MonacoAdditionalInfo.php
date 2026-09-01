<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessNumber
 */
class MonacoAdditionalInfo extends Shape
{
    /**
     * @param array{businessNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
