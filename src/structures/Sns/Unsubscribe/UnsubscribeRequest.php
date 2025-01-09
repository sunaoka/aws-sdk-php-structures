<?php

namespace Sunaoka\Aws\Structures\Sns\Unsubscribe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 */
class UnsubscribeRequest extends Request
{
    /**
     * @param array{SubscriptionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
