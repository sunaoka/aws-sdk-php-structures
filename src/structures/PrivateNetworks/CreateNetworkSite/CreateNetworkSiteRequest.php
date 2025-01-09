<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $availabilityZone
 * @property string $availabilityZoneId
 * @property string $clientToken
 * @property string $description
 * @property string $networkArn
 * @property string $networkSiteName
 * @property Shapes\SitePlan $pendingPlan
 * @property array<string, string> $tags
 */
class CreateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     availabilityZone?: string,
     *     availabilityZoneId?: string,
     *     clientToken?: string,
     *     description?: string,
     *     networkArn: string,
     *     networkSiteName: string,
     *     pendingPlan?: Shapes\SitePlan,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
