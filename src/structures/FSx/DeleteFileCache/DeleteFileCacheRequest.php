<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileCacheId
 * @property string|null $ClientRequestToken
 */
class DeleteFileCacheRequest extends Request
{
    /**
     * @param array{
     *     FileCacheId: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
