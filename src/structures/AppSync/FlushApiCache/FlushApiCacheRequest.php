<?php

namespace Sunaoka\Aws\Structures\AppSync\FlushApiCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class FlushApiCacheRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
