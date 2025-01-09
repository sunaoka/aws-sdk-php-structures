<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property list<ThemeValues> $values
 * @property list<ThemeValues> $overrides
 */
class UpdateThemeData extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     values: list<ThemeValues>,
     *     overrides?: list<ThemeValues>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
