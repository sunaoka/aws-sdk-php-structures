<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property string $TransactionId
 */
class DeleteTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     Name: string,
     *     TransactionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
