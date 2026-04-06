<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 */
class CreateSubscriptionRequest extends Request
{
    /**
     * @param array{domainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
