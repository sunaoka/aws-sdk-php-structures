<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Category
 */
class UniqueValuesComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Category?: DimensionField
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
