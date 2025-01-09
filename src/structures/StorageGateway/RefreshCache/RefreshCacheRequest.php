<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RefreshCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property list<string> $FolderList
 * @property bool $Recursive
 */
class RefreshCacheRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     FolderList?: list<string>,
     *     Recursive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
