<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZonesByName;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HostedZone> $HostedZones
 * @property string|null $DNSName
 * @property string|null $HostedZoneId
 * @property bool $IsTruncated
 * @property string|null $NextDNSName
 * @property string|null $NextHostedZoneId
 * @property string $MaxItems
 */
class ListHostedZonesByNameResponse extends Response
{
}
