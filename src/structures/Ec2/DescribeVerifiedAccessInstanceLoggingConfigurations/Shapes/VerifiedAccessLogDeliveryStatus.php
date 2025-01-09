<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'success'|'failed' $Code
 * @property string $Message
 */
class VerifiedAccessLogDeliveryStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'success'|'failed',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
