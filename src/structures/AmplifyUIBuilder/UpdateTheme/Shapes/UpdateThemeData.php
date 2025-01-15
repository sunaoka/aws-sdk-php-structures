<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property list<ThemeValues> $values
 * @property list<ThemeValues>|null $overrides
 */
class UpdateThemeData extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     values: list<ThemeValues>,
     *     overrides?: list<ThemeValues>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
