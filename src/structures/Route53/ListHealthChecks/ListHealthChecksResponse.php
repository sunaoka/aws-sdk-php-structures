<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HealthCheck> $HealthChecks
 * @property string $Marker
 * @property bool $IsTruncated
 * @property string|null $NextMarker
 * @property string $MaxItems
 */
class ListHealthChecksResponse extends Response
{
}
