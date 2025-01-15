<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogImportStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 */
class GetCatalogImportStatusRequest extends Request
{
    /**
     * @param array{CatalogId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
