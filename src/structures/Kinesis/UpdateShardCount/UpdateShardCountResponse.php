<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StreamName
 * @property int $CurrentShardCount
 * @property int $TargetShardCount
 * @property string $StreamARN
 */
class UpdateShardCountResponse extends Response
{
}
