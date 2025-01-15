<?php

namespace Sunaoka\Aws\Structures\Route53\ListReusableDelegationSets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DelegationSet> $DelegationSets
 * @property string $Marker
 * @property bool $IsTruncated
 * @property string|null $NextMarker
 * @property string $MaxItems
 */
class ListReusableDelegationSetsResponse extends Response
{
}
