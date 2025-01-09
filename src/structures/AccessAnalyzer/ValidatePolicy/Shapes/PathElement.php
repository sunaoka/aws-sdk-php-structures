<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $index
 * @property string $key
 * @property Substring $substring
 * @property string $value
 */
class PathElement extends Shape
{
    /**
     * @param array{
     *     index?: int,
     *     key?: string,
     *     substring?: Substring,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
