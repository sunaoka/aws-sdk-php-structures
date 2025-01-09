<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DisableUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property string $SAMAccountName
 */
class DisableUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
