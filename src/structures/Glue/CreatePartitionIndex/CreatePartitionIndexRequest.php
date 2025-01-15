<?php

namespace Sunaoka\Aws\Structures\Glue\CreatePartitionIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\PartitionIndex $PartitionIndex
 */
class CreatePartitionIndexRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionIndex: Shapes\PartitionIndex
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
