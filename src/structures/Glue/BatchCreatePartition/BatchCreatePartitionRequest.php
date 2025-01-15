<?php

namespace Sunaoka\Aws\Structures\Glue\BatchCreatePartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<Shapes\PartitionInput> $PartitionInputList
 */
class BatchCreatePartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionInputList: list<Shapes\PartitionInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
