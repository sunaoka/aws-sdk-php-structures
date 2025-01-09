<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property list<ThemeValues> $children
 */
class ThemeValue extends Shape
{
    /**
     * @param array{
     *     value?: string,
     *     children?: list<ThemeValues>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
