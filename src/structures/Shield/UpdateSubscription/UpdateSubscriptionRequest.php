<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $AutoRenew
 */
class UpdateSubscriptionRequest extends Request
{
    /**
     * @param array{AutoRenew?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
