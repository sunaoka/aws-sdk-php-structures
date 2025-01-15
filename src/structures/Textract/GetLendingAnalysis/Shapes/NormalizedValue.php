<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'DATE'|null $ValueType
 */
class NormalizedValue extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     ValueType?: 'DATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
