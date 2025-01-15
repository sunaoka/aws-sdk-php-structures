<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostAllocationTagsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TagKey
 * @property string|null $Code
 * @property string|null $Message
 */
class UpdateCostAllocationTagsStatusError extends Shape
{
    /**
     * @param array{
     *     TagKey?: string|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
