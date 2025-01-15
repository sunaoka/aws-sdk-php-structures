<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECOMMENDED_VALUE'|'NULL'|null $ValueWhenUnsetOption
 * @property string|null $CustomValue
 */
class StringValueWhenUnsetConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueWhenUnsetOption?: 'RECOMMENDED_VALUE'|'NULL'|null,
     *     CustomValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
