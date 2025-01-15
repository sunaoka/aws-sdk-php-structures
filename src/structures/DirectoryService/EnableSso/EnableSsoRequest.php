<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableSso;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string|null $UserName
 * @property string|null $Password
 */
class EnableSsoRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UserName?: string|null,
     *     Password?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
