<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogImportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class GetCatalogImportStatusRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
