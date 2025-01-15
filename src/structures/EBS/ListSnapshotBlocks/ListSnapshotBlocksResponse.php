<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Block>|null $Blocks
 * @property \Aws\Api\DateTimeResult|null $ExpiryTime
 * @property int<1, max>|null $VolumeSize
 * @property int|null $BlockSize
 * @property string|null $NextToken
 */
class ListSnapshotBlocksResponse extends Response
{
}
