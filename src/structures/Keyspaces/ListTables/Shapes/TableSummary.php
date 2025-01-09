<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property string $resourceArn
 */
class TableSummary extends Shape
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tableName: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
