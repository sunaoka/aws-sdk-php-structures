<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class GetApiCacheRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
