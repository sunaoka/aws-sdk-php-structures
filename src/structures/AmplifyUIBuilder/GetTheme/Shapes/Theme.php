<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property list<ThemeValues> $values
 * @property list<ThemeValues> $overrides
 * @property array<string, string> $tags
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
     *     modifiedAt?: \Aws\Api\DateTimeResult,
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
