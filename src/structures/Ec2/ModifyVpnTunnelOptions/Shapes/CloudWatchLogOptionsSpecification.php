<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $LogEnabled
 * @property string $LogGroupArn
 * @property string $LogOutputFormat
 */
class CloudWatchLogOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     LogEnabled?: bool,
     *     LogGroupArn?: string,
     *     LogOutputFormat?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
