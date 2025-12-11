<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logFieldName
 * @property LogFieldType|null $logFieldType
 */
class LogFieldsListItem extends Shape
{
    /**
     * @param array{
     *     logFieldName?: string|null,
     *     logFieldType?: LogFieldType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
