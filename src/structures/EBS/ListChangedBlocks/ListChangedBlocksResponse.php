<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ChangedBlock> $ChangedBlocks
 * @property \Aws\Api\DateTimeResult $ExpiryTime
 * @property int $VolumeSize
 * @property int $BlockSize
 * @property string $NextToken
 */
class ListChangedBlocksResponse extends Response
{
}
