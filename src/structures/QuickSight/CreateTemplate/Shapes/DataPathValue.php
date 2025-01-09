<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $FieldValue
 * @property DataPathType $DataPathType
 */
class DataPathValue extends Shape
{
    /**
     * @param array{
     *     FieldId?: string,
     *     FieldValue?: string,
     *     DataPathType?: DataPathType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
