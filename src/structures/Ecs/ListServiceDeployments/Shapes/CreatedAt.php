<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $before
 * @property \Aws\Api\DateTimeResult $after
 */
class CreatedAt extends Shape
{
    /**
     * @param array{
     *     before?: \Aws\Api\DateTimeResult,
     *     after?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
