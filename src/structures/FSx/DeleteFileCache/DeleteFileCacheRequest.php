<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileCacheId
 * @property string $ClientRequestToken
 */
class DeleteFileCacheRequest extends Request
{
    /**
     * @param array{
     *     FileCacheId: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
