<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateAccessLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessLogSubscriptionIdentifier
 * @property string $destinationArn
 */
class UpdateAccessLogSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     accessLogSubscriptionIdentifier: string,
     *     destinationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
