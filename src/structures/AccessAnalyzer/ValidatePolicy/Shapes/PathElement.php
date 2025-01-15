<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $index
 * @property string|null $key
 * @property Substring|null $substring
 * @property string|null $value
 */
class PathElement extends Shape
{
    /**
     * @param array{
     *     index?: int|null,
     *     key?: string|null,
     *     substring?: Substring|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
