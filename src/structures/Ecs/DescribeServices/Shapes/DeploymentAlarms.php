<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $alarmNames
 * @property bool $rollback
 * @property bool $enable
 */
class DeploymentAlarms extends Shape
{
    /**
     * @param array{
     *     alarmNames: list<string>,
     *     rollback: bool,
     *     enable: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
