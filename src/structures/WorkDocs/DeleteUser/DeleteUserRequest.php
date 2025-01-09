<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $UserId
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
