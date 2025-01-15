<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property list<ThemeValues> $values
 * @property list<ThemeValues>|null $overrides
 * @property array<string, string>|null $tags
 */
class Theme extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     name: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     values: list<ThemeValues>,
     *     overrides?: list<ThemeValues>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
