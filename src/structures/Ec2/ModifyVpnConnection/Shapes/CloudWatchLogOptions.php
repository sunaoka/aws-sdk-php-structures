<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $LogEnabled
 * @property string|null $LogGroupArn
 * @property string|null $LogOutputFormat
 * @property bool|null $BgpLogEnabled
 * @property string|null $BgpLogGroupArn
 * @property string|null $BgpLogOutputFormat
 */
class CloudWatchLogOptions extends Shape
{
    /**
     * @param array{
     *     LogEnabled?: bool|null,
     *     LogGroupArn?: string|null,
     *     LogOutputFormat?: string|null,
     *     BgpLogEnabled?: bool|null,
     *     BgpLogGroupArn?: string|null,
     *     BgpLogOutputFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
