<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string|null $DelegationSetId
 * @property 'PrivateHostedZone'|null $HostedZoneType
 */
class ListHostedZonesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     DelegationSetId?: string|null,
     *     HostedZoneType?: 'PrivateHostedZone'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
