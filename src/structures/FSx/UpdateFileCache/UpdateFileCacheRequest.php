<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileCacheId
 * @property string|null $ClientRequestToken
 * @property Shapes\UpdateFileCacheLustreConfiguration|null $LustreConfiguration
 */
class UpdateFileCacheRequest extends Request
{
    /**
     * @param array{
     *     FileCacheId: string,
     *     ClientRequestToken?: string|null,
     *     LustreConfiguration?: Shapes\UpdateFileCacheLustreConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
