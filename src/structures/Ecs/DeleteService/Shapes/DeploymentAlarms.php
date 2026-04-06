<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $alarmNames
 * @property bool $enable
 * @property bool $rollback
 */
class DeploymentAlarms extends Shape
{
    /**
     * @param array{
     *     alarmNames: list<string>,
     *     enable: bool,
     *     rollback: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
