<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessRepresentativeName
 * @property string $lineOfBusiness
 * @property string $itemOfBusiness
 */
class SouthKoreaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     businessRepresentativeName: string,
     *     lineOfBusiness: string,
     *     itemOfBusiness: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
