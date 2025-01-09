<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAccessLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessLogSubscriptionIdentifier
 */
class GetAccessLogSubscriptionRequest extends Request
{
    /**
     * @param array{accessLogSubscriptionIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
