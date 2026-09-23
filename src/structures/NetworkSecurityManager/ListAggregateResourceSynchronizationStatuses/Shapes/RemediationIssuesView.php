<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'WAF'|'SHIELD_ADVANCED', RemediationIssueDetails>|null $issues
 * @property NotVisibleMarker|null $notVisible
 */
class RemediationIssuesView extends Shape
{
    /**
     * @param array{
     *     issues?: array<'WAF'|'SHIELD_ADVANCED', RemediationIssueDetails>|null,
     *     notVisible?: NotVisibleMarker|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
