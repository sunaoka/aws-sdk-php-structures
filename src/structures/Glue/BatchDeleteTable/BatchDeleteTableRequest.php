<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property list<string> $TablesToDelete
 * @property string|null $TransactionId
 */
class BatchDeleteTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TablesToDelete: list<string>,
     *     TransactionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
