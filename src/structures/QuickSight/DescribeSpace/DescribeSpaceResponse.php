<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property Shapes\SpaceDetails $Space
 * @property list<Shapes\SpaceContributor>|null $Contributors
 * @property string|null $RequestId
 */
class DescribeSpaceResponse extends Response
{
}
