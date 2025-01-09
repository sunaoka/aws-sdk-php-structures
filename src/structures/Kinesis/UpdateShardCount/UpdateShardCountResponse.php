<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StreamName
 * @property int<1, max> $CurrentShardCount
 * @property int<1, max> $TargetShardCount
 * @property string $StreamARN
 */
class UpdateShardCountResponse extends Response
{
}
