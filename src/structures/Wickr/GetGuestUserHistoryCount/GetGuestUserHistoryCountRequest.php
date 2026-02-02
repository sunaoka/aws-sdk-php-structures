<?php

namespace Sunaoka\Aws\Structures\Wickr\GetGuestUserHistoryCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetGuestUserHistoryCountRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
