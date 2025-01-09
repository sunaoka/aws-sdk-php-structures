<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property 'VARCHAR' $DimensionValueType
 */
class Dimension extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string,
     *     DimensionValueType?: 'VARCHAR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
