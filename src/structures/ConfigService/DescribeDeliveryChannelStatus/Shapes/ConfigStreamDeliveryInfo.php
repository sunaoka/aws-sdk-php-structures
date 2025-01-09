<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'Failure'|'Not_Applicable' $lastStatus
 * @property string $lastErrorCode
 * @property string $lastErrorMessage
 * @property \Aws\Api\DateTimeResult $lastStatusChangeTime
 */
class ConfigStreamDeliveryInfo extends Shape
{
    /**
     * @param array{
     *     lastStatus?: 'Success'|'Failure'|'Not_Applicable',
     *     lastErrorCode?: string,
     *     lastErrorMessage?: string,
     *     lastStatusChangeTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
