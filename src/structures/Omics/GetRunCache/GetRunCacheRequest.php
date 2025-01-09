<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetRunCacheRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
