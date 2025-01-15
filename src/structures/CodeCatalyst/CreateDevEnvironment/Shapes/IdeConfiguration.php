<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $runtime
 * @property string|null $name
 */
class IdeConfiguration extends Shape
{
    /**
     * @param array{
     *     runtime?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
