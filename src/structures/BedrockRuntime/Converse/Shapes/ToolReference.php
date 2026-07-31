<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $name
 * @property string|null $serverName
 */
class ToolReference extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     name?: string|null,
     *     serverName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
