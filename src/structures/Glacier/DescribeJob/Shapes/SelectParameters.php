<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputSerialization|null $InputSerialization
 * @property 'SQL'|null $ExpressionType
 * @property string|null $Expression
 * @property OutputSerialization|null $OutputSerialization
 */
class SelectParameters extends Shape
{
    /**
     * @param array{
     *     InputSerialization?: InputSerialization|null,
     *     ExpressionType?: 'SQL'|null,
     *     Expression?: string|null,
     *     OutputSerialization?: OutputSerialization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
