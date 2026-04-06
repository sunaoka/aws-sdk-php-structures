<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionValue
 * @property 'VARCHAR' $DimensionValueType
 * @property string $DimensionName
 */
class DimensionMapping extends Shape
{
    /**
     * @param array{
     *     DimensionValue: string,
     *     DimensionValueType: 'VARCHAR',
     *     DimensionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
