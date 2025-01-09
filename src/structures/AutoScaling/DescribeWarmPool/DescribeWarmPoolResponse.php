<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\WarmPoolConfiguration $WarmPoolConfiguration
 * @property list<Shapes\Instance> $Instances
 * @property string $NextToken
 */
class DescribeWarmPoolResponse extends Response
{
}
