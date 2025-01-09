<?php

namespace Sunaoka\Aws\Structures\Sms\ImportAppCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleName
 */
class ImportAppCatalogRequest extends Request
{
    /**
     * @param array{roleName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
