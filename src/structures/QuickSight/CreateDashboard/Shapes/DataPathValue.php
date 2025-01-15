<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldId
 * @property string|null $FieldValue
 * @property DataPathType|null $DataPathType
 */
class DataPathValue extends Shape
{
    /**
     * @param array{
     *     FieldId?: string|null,
     *     FieldValue?: string|null,
     *     DataPathType?: DataPathType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
