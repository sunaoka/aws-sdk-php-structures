<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $EnableLogTypes
 * @property list<string>|null $DisableLogTypes
 */
class CloudwatchLogsExportConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableLogTypes?: list<string>|null,
     *     DisableLogTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
