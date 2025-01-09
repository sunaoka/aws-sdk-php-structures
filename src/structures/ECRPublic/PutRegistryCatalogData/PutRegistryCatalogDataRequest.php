<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRegistryCatalogData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 */
class PutRegistryCatalogDataRequest extends Request
{
    /**
     * @param array{displayName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
