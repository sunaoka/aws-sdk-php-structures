<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $names
 * @property string|null $namePrefix
 * @property list<string>|null $ids
 * @property list<'OK'|'WARNING'|'CRITICAL'|'NODATA'>|null $stateValue
 * @property bool|null $notificationsEnabled
 */
class AlertFilterCriteria extends Shape
{
    /**
     * @param array{
     *     names?: list<string>|null,
     *     namePrefix?: string|null,
     *     ids?: list<string>|null,
     *     stateValue?: list<'OK'|'WARNING'|'CRITICAL'|'NODATA'>|null,
     *     notificationsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
