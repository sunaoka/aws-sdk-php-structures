<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property Shapes\TableInput $TableInput
 * @property list<Shapes\PartitionIndex>|null $PartitionIndexes
 * @property string|null $TransactionId
 * @property Shapes\OpenTableFormatInput|null $OpenTableFormatInput
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableInput: Shapes\TableInput,
     *     PartitionIndexes?: list<Shapes\PartitionIndex>|null,
     *     TransactionId?: string|null,
     *     OpenTableFormatInput?: Shapes\OpenTableFormatInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
