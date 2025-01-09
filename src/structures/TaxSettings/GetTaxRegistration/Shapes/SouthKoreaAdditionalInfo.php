<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessRepresentativeName
 * @property string $itemOfBusiness
 * @property string $lineOfBusiness
 */
class SouthKoreaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     businessRepresentativeName: string,
     *     itemOfBusiness: string,
     *     lineOfBusiness: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
