<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApiCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class DeleteApiCacheRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
