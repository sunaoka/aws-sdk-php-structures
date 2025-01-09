<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<ThemeValues> $values
 * @property list<ThemeValues> $overrides
 * @property array<string, string> $tags
 */
class CreateThemeData extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<ThemeValues>,
     *     overrides?: list<ThemeValues>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
