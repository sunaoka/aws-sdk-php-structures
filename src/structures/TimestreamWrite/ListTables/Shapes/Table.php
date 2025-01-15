<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $TableName
 * @property string|null $DatabaseName
 * @property 'ACTIVE'|'DELETING'|'RESTORING'|null $TableStatus
 * @property RetentionProperties|null $RetentionProperties
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property MagneticStoreWriteProperties|null $MagneticStoreWriteProperties
 * @property Schema|null $Schema
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     TableName?: string|null,
     *     DatabaseName?: string|null,
     *     TableStatus?: 'ACTIVE'|'DELETING'|'RESTORING'|null,
     *     RetentionProperties?: RetentionProperties|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     MagneticStoreWriteProperties?: MagneticStoreWriteProperties|null,
     *     Schema?: Schema|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
