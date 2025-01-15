<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property string|null $TransactionId
 */
class DeleteTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Name: string,
     *     TransactionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
