<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Block> $Blocks
 * @property \Aws\Api\DateTimeResult $ExpiryTime
 * @property int $VolumeSize
 * @property int $BlockSize
 * @property string $NextToken
 */
class ListSnapshotBlocksResponse extends Response
{
}
