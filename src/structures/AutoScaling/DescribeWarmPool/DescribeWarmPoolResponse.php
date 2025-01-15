<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\WarmPoolConfiguration|null $WarmPoolConfiguration
 * @property list<Shapes\Instance>|null $Instances
 * @property string|null $NextToken
 */
class DescribeWarmPoolResponse extends Response
{
}
