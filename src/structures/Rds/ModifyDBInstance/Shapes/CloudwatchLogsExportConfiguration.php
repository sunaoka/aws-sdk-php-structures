<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EnableLogTypes
 * @property list<string> $DisableLogTypes
 */
class CloudwatchLogsExportConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableLogTypes?: list<string>,
     *     DisableLogTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
