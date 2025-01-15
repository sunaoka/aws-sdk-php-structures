<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property list<ThemeValues>|null $children
 */
class ThemeValue extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     children?: list<ThemeValues>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
