<?php

namespace Sunaoka\Aws\Structures\LocationService\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Position'|'CountrySpecificAttributes'>|null $AdditionalFeatures
 */
class ValidateAddressActionOptions extends Shape
{
    /**
     * @param array{AdditionalFeatures?: list<'Position'|'CountrySpecificAttributes'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
