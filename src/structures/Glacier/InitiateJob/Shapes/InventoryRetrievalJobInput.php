<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property string|null $Limit
 * @property string|null $Marker
 */
class InventoryRetrievalJobInput extends Shape
{
    /**
     * @param array{
     *     StartDate?: string|null,
     *     EndDate?: string|null,
     *     Limit?: string|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
