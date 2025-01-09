<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property 'json'|'json-unformatted' $MessageFormat
 * @property string $ServiceAccessRoleArn
 * @property bool $IncludeTransactionDetails
 * @property bool $IncludePartitionValue
 * @property bool $PartitionIncludeSchemaTable
 * @property bool $IncludeTableAlterOperations
 * @property bool $IncludeControlDetails
 * @property bool $IncludeNullAndEmpty
 * @property bool $NoHexPrefix
 * @property bool $UseLargeIntegerValue
 */
class KinesisSettings extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string,
     *     MessageFormat?: 'json'|'json-unformatted',
     *     ServiceAccessRoleArn?: string,
     *     IncludeTransactionDetails?: bool,
     *     IncludePartitionValue?: bool,
     *     PartitionIncludeSchemaTable?: bool,
     *     IncludeTableAlterOperations?: bool,
     *     IncludeControlDetails?: bool,
     *     IncludeNullAndEmpty?: bool,
     *     NoHexPrefix?: bool,
     *     UseLargeIntegerValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
