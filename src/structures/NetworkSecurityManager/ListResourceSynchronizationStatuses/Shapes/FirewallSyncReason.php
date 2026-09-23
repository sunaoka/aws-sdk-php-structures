<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $missingFirewall
 * @property InvalidFirewallReasons|null $invalidFirewall
 */
class FirewallSyncReason extends Shape
{
    /**
     * @param array{
     *     missingFirewall?: string|null,
     *     invalidFirewall?: InvalidFirewallReasons|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
