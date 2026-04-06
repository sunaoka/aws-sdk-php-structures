<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListEulas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $eulaId
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Eula extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     eulaId?: string|null,
     *     name?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
