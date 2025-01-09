<?php

namespace Sunaoka\Aws\Structures\Glue\CreatePartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\PartitionInput $PartitionInput
 */
class CreatePartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionInput: Shapes\PartitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
