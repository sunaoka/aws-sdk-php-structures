<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 */
class DescribeFlywheelRequest extends Request
{
    /**
     * @param array{FlywheelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
