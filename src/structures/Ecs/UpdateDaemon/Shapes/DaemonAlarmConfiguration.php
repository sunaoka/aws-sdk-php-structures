<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateDaemon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $alarmNames
 * @property bool|null $enable
 */
class DaemonAlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     alarmNames?: list<string>|null,
     *     enable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
