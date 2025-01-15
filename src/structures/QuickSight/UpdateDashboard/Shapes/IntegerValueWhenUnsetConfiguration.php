<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECOMMENDED_VALUE'|'NULL'|null $ValueWhenUnsetOption
 * @property int|null $CustomValue
 */
class IntegerValueWhenUnsetConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueWhenUnsetOption?: 'RECOMMENDED_VALUE'|'NULL'|null,
     *     CustomValue?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
