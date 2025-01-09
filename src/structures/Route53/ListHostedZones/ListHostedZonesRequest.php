<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $DelegationSetId
 * @property 'PrivateHostedZone' $HostedZoneType
 */
class ListHostedZonesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     DelegationSetId?: string,
     *     HostedZoneType?: 'PrivateHostedZone'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
