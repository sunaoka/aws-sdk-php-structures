<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteAccessLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessLogSubscriptionIdentifier
 */
class DeleteAccessLogSubscriptionRequest extends Request
{
    /**
     * @param array{accessLogSubscriptionIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
