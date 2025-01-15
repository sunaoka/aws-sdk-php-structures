<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StreamName
 * @property int<1, max>|null $CurrentShardCount
 * @property int<1, max>|null $TargetShardCount
 * @property string|null $StreamARN
 */
class UpdateShardCountResponse extends Response
{
}
