<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $TableName
 * @property string $DatabaseName
 * @property 'ACTIVE'|'DELETING'|'RESTORING' $TableStatus
 * @property RetentionProperties $RetentionProperties
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property MagneticStoreWriteProperties $MagneticStoreWriteProperties
 * @property Schema $Schema
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     TableName?: string,
     *     DatabaseName?: string,
     *     TableStatus?: 'ACTIVE'|'DELETING'|'RESTORING',
     *     RetentionProperties?: RetentionProperties,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     MagneticStoreWriteProperties?: MagneticStoreWriteProperties,
     *     Schema?: Schema
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
