<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $Succeeded
 * @property list<Shapes\FailedResource>|null $Failed
 * @property list<Shapes\PendingResource>|null $Pending
 */
class GroupResourcesResponse extends Response
{
}
