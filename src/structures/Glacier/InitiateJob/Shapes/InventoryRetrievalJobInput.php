<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Limit
 * @property string $Marker
 */
class InventoryRetrievalJobInput extends Shape
{
    /**
     * @param array{
     *     StartDate?: string,
     *     EndDate?: string,
     *     Limit?: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
