<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property ThemeValue $value
 */
class ThemeValues extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     value?: ThemeValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
