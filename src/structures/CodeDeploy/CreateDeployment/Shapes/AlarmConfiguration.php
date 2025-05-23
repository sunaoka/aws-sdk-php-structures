<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property bool|null $ignorePollAlarmFailure
 * @property list<Alarm>|null $alarms
 */
class AlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     ignorePollAlarmFailure?: bool|null,
     *     alarms?: list<Alarm>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
