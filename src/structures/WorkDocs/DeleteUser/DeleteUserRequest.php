<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $UserId
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
