<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property bool $ignorePollAlarmFailure
 * @property list<Alarm> $alarms
 */
class AlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     ignorePollAlarmFailure?: bool,
     *     alarms?: list<Alarm>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
