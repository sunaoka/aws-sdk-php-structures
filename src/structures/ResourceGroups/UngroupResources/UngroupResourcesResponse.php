<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UngroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $Succeeded
 * @property list<Shapes\FailedResource>|null $Failed
 * @property list<Shapes\PendingResource>|null $Pending
 */
class UngroupResourcesResponse extends Response
{
}
