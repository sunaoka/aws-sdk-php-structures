<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userName
 * @property string $environmentId
 */
class DeleteKxUserRequest extends Request
{
    /**
     * @param array{
     *     userName: string,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
