<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamWarmThroughput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StreamARN
 * @property string|null $StreamName
 * @property Shapes\WarmThroughputObject|null $WarmThroughput
 */
class UpdateStreamWarmThroughputResponse extends Response
{
}
