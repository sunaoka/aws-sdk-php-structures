<?php

namespace Sunaoka\Aws\Structures\Glue\ImportCatalogToGlue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class ImportCatalogToGlueRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
