<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $LogTypesToEnable
 * @property list<string>|null $LogTypesToDisable
 */
class PendingCloudwatchLogsExports extends Shape
{
    /**
     * @param array{
     *     LogTypesToEnable?: list<string>|null,
     *     LogTypesToDisable?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
