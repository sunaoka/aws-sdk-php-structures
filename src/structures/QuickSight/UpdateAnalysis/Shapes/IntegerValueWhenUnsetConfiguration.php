<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECOMMENDED_VALUE'|'NULL' $ValueWhenUnsetOption
 * @property int $CustomValue
 */
class IntegerValueWhenUnsetConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueWhenUnsetOption?: 'RECOMMENDED_VALUE'|'NULL',
     *     CustomValue?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
