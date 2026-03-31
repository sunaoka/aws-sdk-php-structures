<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLookupTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lookupTableArn
 * @property string|null $lookupTableName
 * @property string|null $description
 * @property list<string>|null $tableFields
 * @property int<0, max>|null $recordsCount
 * @property int<0, max>|null $sizeBytes
 * @property int<0, max>|null $lastUpdatedTime
 * @property string|null $kmsKeyId
 */
class LookupTable extends Shape
{
    /**
     * @param array{
     *     lookupTableArn?: string|null,
     *     lookupTableName?: string|null,
     *     description?: string|null,
     *     tableFields?: list<string>|null,
     *     recordsCount?: int<0, max>|null,
     *     sizeBytes?: int<0, max>|null,
     *     lastUpdatedTime?: int<0, max>|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
