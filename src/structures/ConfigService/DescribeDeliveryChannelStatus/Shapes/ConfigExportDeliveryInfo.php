<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'Failure'|'Not_Applicable'|null $lastStatus
 * @property string|null $lastErrorCode
 * @property string|null $lastErrorMessage
 * @property \Aws\Api\DateTimeResult|null $lastAttemptTime
 * @property \Aws\Api\DateTimeResult|null $lastSuccessfulTime
 * @property \Aws\Api\DateTimeResult|null $nextDeliveryTime
 */
class ConfigExportDeliveryInfo extends Shape
{
    /**
     * @param array{
     *     lastStatus?: 'Success'|'Failure'|'Not_Applicable'|null,
     *     lastErrorCode?: string|null,
     *     lastErrorMessage?: string|null,
     *     lastAttemptTime?: \Aws\Api\DateTimeResult|null,
     *     lastSuccessfulTime?: \Aws\Api\DateTimeResult|null,
     *     nextDeliveryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
