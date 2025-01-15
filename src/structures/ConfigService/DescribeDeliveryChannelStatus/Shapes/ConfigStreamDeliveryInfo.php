<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'Failure'|'Not_Applicable'|null $lastStatus
 * @property string|null $lastErrorCode
 * @property string|null $lastErrorMessage
 * @property \Aws\Api\DateTimeResult|null $lastStatusChangeTime
 */
class ConfigStreamDeliveryInfo extends Shape
{
    /**
     * @param array{
     *     lastStatus?: 'Success'|'Failure'|'Not_Applicable'|null,
     *     lastErrorCode?: string|null,
     *     lastErrorMessage?: string|null,
     *     lastStatusChangeTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
