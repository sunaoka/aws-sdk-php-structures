<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 * @property 'json'|'json-unformatted'|null $MessageFormat
 * @property string|null $ServiceAccessRoleArn
 * @property bool|null $IncludeTransactionDetails
 * @property bool|null $IncludePartitionValue
 * @property bool|null $PartitionIncludeSchemaTable
 * @property bool|null $IncludeTableAlterOperations
 * @property bool|null $IncludeControlDetails
 * @property bool|null $IncludeNullAndEmpty
 * @property bool|null $NoHexPrefix
 * @property bool|null $UseLargeIntegerValue
 */
class KinesisSettings extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string|null,
     *     MessageFormat?: 'json'|'json-unformatted'|null,
     *     ServiceAccessRoleArn?: string|null,
     *     IncludeTransactionDetails?: bool|null,
     *     IncludePartitionValue?: bool|null,
     *     PartitionIncludeSchemaTable?: bool|null,
     *     IncludeTableAlterOperations?: bool|null,
     *     IncludeControlDetails?: bool|null,
     *     IncludeNullAndEmpty?: bool|null,
     *     NoHexPrefix?: bool|null,
     *     UseLargeIntegerValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
