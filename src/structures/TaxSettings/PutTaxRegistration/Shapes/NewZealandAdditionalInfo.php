<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $peppolId
 */
class NewZealandAdditionalInfo extends Shape
{
    /**
     * @param array{peppolId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
