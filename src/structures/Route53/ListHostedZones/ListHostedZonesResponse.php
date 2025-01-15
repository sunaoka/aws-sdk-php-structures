<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZones;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HostedZone> $HostedZones
 * @property string $Marker
 * @property bool $IsTruncated
 * @property string|null $NextMarker
 * @property string $MaxItems
 */
class ListHostedZonesResponse extends Response
{
}
