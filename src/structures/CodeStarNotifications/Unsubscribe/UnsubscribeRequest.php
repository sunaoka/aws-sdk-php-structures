<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\Unsubscribe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $TargetAddress
 */
class UnsubscribeRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     TargetAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
