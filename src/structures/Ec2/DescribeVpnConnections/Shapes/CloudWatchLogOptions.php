<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $LogEnabled
 * @property string|null $LogGroupArn
 * @property string|null $LogOutputFormat
 */
class CloudWatchLogOptions extends Shape
{
    /**
     * @param array{
     *     LogEnabled?: bool|null,
     *     LogGroupArn?: string|null,
     *     LogOutputFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
