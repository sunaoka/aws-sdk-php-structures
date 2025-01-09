<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $ConnectionName
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ConnectionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
