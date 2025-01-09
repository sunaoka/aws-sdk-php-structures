<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $runtime
 * @property string $name
 */
class IdeConfiguration extends Shape
{
    /**
     * @param array{
     *     runtime?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
