<?php

namespace Sunaoka\Aws\Structures\Glacier\ListProvisionedCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityId
 * @property string $StartDate
 * @property string $ExpirationDate
 */
class ProvisionedCapacityDescription extends Shape
{
    /**
     * @param array{
     *     CapacityId?: string,
     *     StartDate?: string,
     *     ExpirationDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
