<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property ThemeValue|null $value
 */
class ThemeValues extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: ThemeValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
