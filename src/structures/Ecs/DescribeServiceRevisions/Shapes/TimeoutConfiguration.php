<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $idleTimeoutSeconds
 * @property int<0, 2147483647>|null $perRequestTimeoutSeconds
 */
class TimeoutConfiguration extends Shape
{
    /**
     * @param array{
     *     idleTimeoutSeconds?: int<0, 2147483647>|null,
     *     perRequestTimeoutSeconds?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
