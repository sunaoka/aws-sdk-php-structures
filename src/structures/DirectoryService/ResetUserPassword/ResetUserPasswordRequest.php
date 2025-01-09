<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ResetUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $UserName
 * @property string $NewPassword
 */
class ResetUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UserName: string,
     *     NewPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
