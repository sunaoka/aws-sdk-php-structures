<?php

namespace Sunaoka\Aws\Structures\LocationService\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ValidateAddressActionOptions|null $ValidateAddress
 */
class JobActionOptions extends Shape
{
    /**
     * @param array{ValidateAddress?: ValidateAddressActionOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
