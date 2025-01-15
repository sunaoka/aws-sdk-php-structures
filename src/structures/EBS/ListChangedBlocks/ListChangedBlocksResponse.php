<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ChangedBlock>|null $ChangedBlocks
 * @property \Aws\Api\DateTimeResult|null $ExpiryTime
 * @property int<1, max>|null $VolumeSize
 * @property int|null $BlockSize
 * @property string|null $NextToken
 */
class ListChangedBlocksResponse extends Response
{
}
