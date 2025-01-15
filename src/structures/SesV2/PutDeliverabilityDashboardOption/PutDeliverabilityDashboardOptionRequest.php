<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDeliverabilityDashboardOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DashboardEnabled
 * @property list<Shapes\DomainDeliverabilityTrackingOption>|null $SubscribedDomains
 */
class PutDeliverabilityDashboardOptionRequest extends Request
{
    /**
     * @param array{
     *     DashboardEnabled: bool,
     *     SubscribedDomains?: list<Shapes\DomainDeliverabilityTrackingOption>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
