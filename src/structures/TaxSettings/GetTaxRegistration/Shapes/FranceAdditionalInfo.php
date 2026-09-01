<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sirenNumber
 * @property string|null $eInvoiceRoutingCode
 */
class FranceAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     sirenNumber: string,
     *     eInvoiceRoutingCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
