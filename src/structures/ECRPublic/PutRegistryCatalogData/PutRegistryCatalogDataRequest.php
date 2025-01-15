<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRegistryCatalogData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 */
class PutRegistryCatalogDataRequest extends Request
{
    /**
     * @param array{displayName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
