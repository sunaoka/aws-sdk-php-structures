<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $before
 * @property \Aws\Api\DateTimeResult|null $after
 */
class CreatedAt extends Shape
{
    /**
     * @param array{
     *     before?: \Aws\Api\DateTimeResult|null,
     *     after?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
