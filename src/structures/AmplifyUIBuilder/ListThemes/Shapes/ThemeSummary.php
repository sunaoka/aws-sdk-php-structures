<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListThemes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $name
 */
class ThemeSummary extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
