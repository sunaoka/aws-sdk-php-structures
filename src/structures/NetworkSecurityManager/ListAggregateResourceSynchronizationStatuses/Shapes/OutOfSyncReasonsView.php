<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'WAF'|'SHIELD_ADVANCED', FirewallSyncReason>|null $reasons
 * @property NotVisibleMarker|null $notVisible
 */
class OutOfSyncReasonsView extends Shape
{
    /**
     * @param array{
     *     reasons?: array<'WAF'|'SHIELD_ADVANCED', FirewallSyncReason>|null,
     *     notVisible?: NotVisibleMarker|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
