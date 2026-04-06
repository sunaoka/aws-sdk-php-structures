<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class GetCatalogRequest extends Request
{
    /**
     * @param array{CatalogId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
