<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ResolveAppVersionResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $resolutionId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class ResolveAppVersionResourcesResponse extends Response
{
}
