<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableSso;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $Password
 */
class DisableSsoRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UserName?: string,
     *     Password?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
