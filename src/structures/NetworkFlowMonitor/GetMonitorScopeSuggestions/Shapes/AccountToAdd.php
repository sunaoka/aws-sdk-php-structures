<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitorScopeSuggestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $region
 * @property 'IN_ORG'|'NOT_IN_ORG'|'UNKNOWN' $membership
 */
class AccountToAdd extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     region: string,
     *     membership: 'IN_ORG'|'NOT_IN_ORG'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
