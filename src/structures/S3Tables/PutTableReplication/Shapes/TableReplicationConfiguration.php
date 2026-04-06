<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $role
 * @property list<TableReplicationRule> $rules
 */
class TableReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     role: string,
     *     rules: list<TableReplicationRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
