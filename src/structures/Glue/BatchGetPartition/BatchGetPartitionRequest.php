<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\PartitionValueList> $PartitionsToGet
 * @property Shapes\AuditContext|null $AuditContext
 * @property Shapes\QuerySessionContext|null $QuerySessionContext
 */
class BatchGetPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionsToGet: list<Shapes\PartitionValueList>,
     *     AuditContext?: Shapes\AuditContext|null,
     *     QuerySessionContext?: Shapes\QuerySessionContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
