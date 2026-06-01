<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListSpaceResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property list<Shapes\SpaceResourceSummary> $SpaceResources
 * @property string|null $RequestId
 */
class ListSpaceResourcesResponse extends Response
{
}
