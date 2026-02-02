<?php

namespace Sunaoka\Aws\Structures\Wickr\GetBotsCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetBotsCountRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
