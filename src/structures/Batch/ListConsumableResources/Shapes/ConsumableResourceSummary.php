<?php

namespace Sunaoka\Aws\Structures\Batch\ListConsumableResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $consumableResourceArn
 * @property string $consumableResourceName
 * @property int|null $totalQuantity
 * @property int|null $inUseQuantity
 * @property string|null $resourceType
 */
class ConsumableResourceSummary extends Shape
{
    /**
     * @param array{
     *     consumableResourceArn: string,
     *     consumableResourceName: string,
     *     totalQuantity?: int|null,
     *     inUseQuantity?: int|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
