<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property LogFieldType|null $element
 * @property list<LogFieldsListItem>|null $fields
 */
class LogFieldType extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     element?: LogFieldType|null,
     *     fields?: list<LogFieldsListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
