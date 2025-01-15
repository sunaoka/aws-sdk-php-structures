<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $networkArn
 * @property string $networkSiteName
 * @property Shapes\SitePlan|null $pendingPlan
 * @property array<string, string>|null $tags
 */
class CreateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     networkArn: string,
     *     networkSiteName: string,
     *     pendingPlan?: Shapes\SitePlan|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
