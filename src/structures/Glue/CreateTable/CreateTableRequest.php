<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property Shapes\TableInput $TableInput
 * @property list<Shapes\PartitionIndex> $PartitionIndexes
 * @property string $TransactionId
 * @property Shapes\OpenTableFormatInput $OpenTableFormatInput
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableInput: Shapes\TableInput,
     *     PartitionIndexes?: list<Shapes\PartitionIndex>,
     *     TransactionId?: string,
     *     OpenTableFormatInput?: Shapes\OpenTableFormatInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
