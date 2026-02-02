<?php

namespace Sunaoka\Aws\Structures\Wickr\GetUsersCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetUsersCountRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
