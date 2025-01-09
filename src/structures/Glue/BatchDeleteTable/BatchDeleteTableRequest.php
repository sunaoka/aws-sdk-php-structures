<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property list<string> $TablesToDelete
 * @property string $TransactionId
 */
class BatchDeleteTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TablesToDelete: list<string>,
     *     TransactionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
