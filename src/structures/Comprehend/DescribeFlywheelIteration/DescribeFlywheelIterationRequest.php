<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheelIteration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string $FlywheelIterationId
 */
class DescribeFlywheelIterationRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     FlywheelIterationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
