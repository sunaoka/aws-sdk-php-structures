<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeID\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'DATE' $ValueType
 */
class NormalizedValue extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     ValueType?: 'DATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
