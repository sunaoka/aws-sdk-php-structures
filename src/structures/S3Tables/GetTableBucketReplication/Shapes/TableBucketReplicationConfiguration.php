<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $role
 * @property list<TableBucketReplicationRule> $rules
 */
class TableBucketReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     role: string,
     *     rules: list<TableBucketReplicationRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
