<?php

namespace Sunaoka\Aws\Structures\Glacier\ListProvisionedCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityId
 * @property string|null $StartDate
 * @property string|null $ExpirationDate
 */
class ProvisionedCapacityDescription extends Shape
{
    /**
     * @param array{
     *     CapacityId?: string|null,
     *     StartDate?: string|null,
     *     ExpirationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
