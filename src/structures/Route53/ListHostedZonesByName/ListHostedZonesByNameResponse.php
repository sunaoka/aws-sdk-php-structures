<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HostedZone> $HostedZones
 * @property string $DNSName
 * @property string $HostedZoneId
 * @property bool $IsTruncated
 * @property string $NextDNSName
 * @property string $NextHostedZoneId
 * @property string $MaxItems
 */
class ListHostedZonesByNameResponse extends Response
{
}
