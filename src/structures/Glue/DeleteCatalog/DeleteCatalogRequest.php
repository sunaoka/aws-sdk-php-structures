<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class DeleteCatalogRequest extends Request
{
    /**
     * @param array{CatalogId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
