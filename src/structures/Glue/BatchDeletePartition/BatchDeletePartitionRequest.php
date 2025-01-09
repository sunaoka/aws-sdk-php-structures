<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeletePartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\PartitionValueList> $PartitionsToDelete
 */
class BatchDeletePartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionsToDelete: list<Shapes\PartitionValueList>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
