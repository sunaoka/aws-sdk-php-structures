<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmRoleArn
 * @property string|null $notificationLambdaArn
 */
class Alarms extends Shape
{
    /**
     * @param array{
     *     alarmRoleArn: string,
     *     notificationLambdaArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
