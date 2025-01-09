<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\BatchUpdatePartitionRequestEntry> $Entries
 */
class BatchUpdatePartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Entries: list<Shapes\BatchUpdatePartitionRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
