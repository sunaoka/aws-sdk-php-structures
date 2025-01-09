<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UngroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $Succeeded
 * @property list<Shapes\FailedResource> $Failed
 * @property list<Shapes\PendingResource> $Pending
 */
class UngroupResourcesResponse extends Response
{
}
