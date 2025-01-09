<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $alarmName
 * @property string $stateReason
 * @property string $stateValue
 */
class CloudwatchAlarmAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     alarmName: string,
     *     stateReason: string,
     *     stateValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
