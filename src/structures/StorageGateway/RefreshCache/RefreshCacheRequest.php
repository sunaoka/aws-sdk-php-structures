<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RefreshCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property list<string>|null $FolderList
 * @property bool|null $Recursive
 */
class RefreshCacheRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     FolderList?: list<string>|null,
     *     Recursive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
