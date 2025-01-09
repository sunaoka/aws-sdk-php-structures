<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $Succeeded
 * @property list<Shapes\FailedResource> $Failed
 * @property list<Shapes\PendingResource> $Pending
 */
class GroupResourcesResponse extends Response
{
}
