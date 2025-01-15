<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Category
 */
class UniqueValuesComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Category?: DimensionField|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
