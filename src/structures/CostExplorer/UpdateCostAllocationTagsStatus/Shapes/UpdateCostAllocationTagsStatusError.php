<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostAllocationTagsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string $Code
 * @property string $Message
 */
class UpdateCostAllocationTagsStatusError extends Shape
{
    /**
     * @param array{
     *     TagKey?: string,
     *     Code?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
