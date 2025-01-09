<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSitePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $networkSiteArn
 * @property Shapes\SitePlan $pendingPlan
 */
class UpdateNetworkSitePlanRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     networkSiteArn: string,
     *     pendingPlan: Shapes\SitePlan
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
