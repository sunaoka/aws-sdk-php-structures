<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userName
 * @property string $environmentId
 * @property string $clientToken
 */
class DeleteKxUserRequest extends Request
{
    /**
     * @param array{
     *     userName: string,
     *     environmentId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
