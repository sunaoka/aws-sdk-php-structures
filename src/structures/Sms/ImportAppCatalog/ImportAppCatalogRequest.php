<?php

namespace Sunaoka\Aws\Structures\Sms\ImportAppCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $roleName
 */
class ImportAppCatalogRequest extends Request
{
    /**
     * @param array{roleName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
