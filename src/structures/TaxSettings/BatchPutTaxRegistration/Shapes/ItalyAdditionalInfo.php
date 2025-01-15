<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cigNumber
 * @property string|null $cupNumber
 * @property string|null $sdiAccountId
 * @property string|null $taxCode
 */
class ItalyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     cigNumber?: string|null,
     *     cupNumber?: string|null,
     *     sdiAccountId?: string|null,
     *     taxCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
