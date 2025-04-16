<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $namespace
 * @property string $name
 * @property 'customer'|'aws' $type
 * @property string $tableARN
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string|null $namespaceId
 * @property string|null $tableBucketId
 */
class TableSummary extends Shape
{
    /**
     * @param array{
     *     namespace: list<string>,
     *     name: string,
     *     type: 'customer'|'aws',
     *     tableARN: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     namespaceId?: string|null,
     *     tableBucketId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
