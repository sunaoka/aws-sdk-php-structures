<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupIdentifier
 * @property string|null $fieldIndexName
 * @property int<0, max>|null $lastScanTime
 * @property int<0, max>|null $firstEventTime
 * @property int<0, max>|null $lastEventTime
 * @property 'FACET'|'FIELD_INDEX'|null $type
 * @property 'DEFAULT'|'CUSTOM'|'AUTO'|'INACTIVE'|null $indexCategory
 */
class FieldIndex extends Shape
{
    /**
     * @param array{
     *     logGroupIdentifier?: string|null,
     *     fieldIndexName?: string|null,
     *     lastScanTime?: int<0, max>|null,
     *     firstEventTime?: int<0, max>|null,
     *     lastEventTime?: int<0, max>|null,
     *     type?: 'FACET'|'FIELD_INDEX'|null,
     *     indexCategory?: 'DEFAULT'|'CUSTOM'|'AUTO'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
