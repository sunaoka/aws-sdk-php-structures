<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetCurrentUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 */
class GetCurrentUserRequest extends Request
{
    /**
     * @param array{AuthenticationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
