<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\PartitionValueList> $PartitionsToGet
 */
class BatchGetPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionsToGet: list<Shapes\PartitionValueList>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
