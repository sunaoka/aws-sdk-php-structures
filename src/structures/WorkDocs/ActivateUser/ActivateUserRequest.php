<?php

namespace Sunaoka\Aws\Structures\WorkDocs\ActivateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $AuthenticationToken
 */
class ActivateUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     AuthenticationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
