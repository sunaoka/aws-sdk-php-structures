<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECOMMENDED_VALUE'|'NULL'|null $ValueWhenUnsetOption
 * @property \Aws\Api\DateTimeResult|null $CustomValue
 */
class DateTimeValueWhenUnsetConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueWhenUnsetOption?: 'RECOMMENDED_VALUE'|'NULL'|null,
     *     CustomValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
