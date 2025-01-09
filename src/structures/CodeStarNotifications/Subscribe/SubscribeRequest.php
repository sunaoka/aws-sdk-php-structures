<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\Subscribe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\Target $Target
 * @property string $ClientRequestToken
 */
class SubscribeRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Target: Shapes\Target,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
