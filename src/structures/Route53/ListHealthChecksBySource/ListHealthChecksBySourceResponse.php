<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecksBySource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\HealthCheck> $HealthChecks
 * @property string|null $Marker
 * @property bool $IsTruncated
 * @property string|null $NextMarker
 * @property string $MaxItems
 */
class ListHealthChecksBySourceResponse extends Response
{
}
