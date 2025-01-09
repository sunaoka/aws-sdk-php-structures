<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRunCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteRunCacheRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
