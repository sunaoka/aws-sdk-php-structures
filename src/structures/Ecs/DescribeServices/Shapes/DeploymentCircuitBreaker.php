<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enable
 * @property bool $rollback
 */
class DeploymentCircuitBreaker extends Shape
{
    /**
     * @param array{
     *     enable: bool,
     *     rollback: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
