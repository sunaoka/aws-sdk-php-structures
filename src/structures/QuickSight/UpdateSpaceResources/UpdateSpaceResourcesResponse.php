<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpaceResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property list<Shapes\FailedSpaceResourceOperation>|null $FailedResourceOperations
 * @property string|null $RequestId
 */
class UpdateSpaceResourcesResponse extends Response
{
}
