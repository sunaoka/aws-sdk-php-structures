<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property string $SAMAccountName
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
