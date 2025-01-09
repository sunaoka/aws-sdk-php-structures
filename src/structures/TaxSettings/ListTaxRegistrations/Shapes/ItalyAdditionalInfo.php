<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cigNumber
 * @property string $cupNumber
 * @property string $sdiAccountId
 * @property string $taxCode
 */
class ItalyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     cigNumber?: string,
     *     cupNumber?: string,
     *     sdiAccountId?: string,
     *     taxCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
