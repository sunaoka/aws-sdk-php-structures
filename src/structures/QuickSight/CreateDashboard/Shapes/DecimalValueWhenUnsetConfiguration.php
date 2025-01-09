<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECOMMENDED_VALUE'|'NULL' $ValueWhenUnsetOption
 * @property double $CustomValue
 */
class DecimalValueWhenUnsetConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueWhenUnsetOption?: 'RECOMMENDED_VALUE'|'NULL',
     *     CustomValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
