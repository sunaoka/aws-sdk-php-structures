<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileCacheId
 * @property string $ClientRequestToken
 * @property Shapes\UpdateFileCacheLustreConfiguration $LustreConfiguration
 */
class UpdateFileCacheRequest extends Request
{
    /**
     * @param array{
     *     FileCacheId: string,
     *     ClientRequestToken?: string,
     *     LustreConfiguration?: Shapes\UpdateFileCacheLustreConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
