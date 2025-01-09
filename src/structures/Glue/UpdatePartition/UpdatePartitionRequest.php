<?php

namespace Sunaoka\Aws\Structures\Glue\UpdatePartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValueList
 * @property Shapes\PartitionInput $PartitionInput
 */
class UpdatePartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValueList: list<string>,
     *     PartitionInput: Shapes\PartitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
