<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmRoleArn
 * @property string $notificationLambdaArn
 */
class Alarms extends Shape
{
    /**
     * @param array{
     *     alarmRoleArn: string,
     *     notificationLambdaArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
