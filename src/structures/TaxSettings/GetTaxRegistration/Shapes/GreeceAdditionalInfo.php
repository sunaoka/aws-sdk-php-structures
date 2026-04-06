<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contractingAuthorityCode
 */
class GreeceAdditionalInfo extends Shape
{
    /**
     * @param array{contractingAuthorityCode?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
