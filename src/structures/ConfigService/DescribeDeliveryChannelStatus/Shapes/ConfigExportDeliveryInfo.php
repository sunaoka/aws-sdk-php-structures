<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannelStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'Failure'|'Not_Applicable' $lastStatus
 * @property string $lastErrorCode
 * @property string $lastErrorMessage
 * @property \Aws\Api\DateTimeResult $lastAttemptTime
 * @property \Aws\Api\DateTimeResult $lastSuccessfulTime
 * @property \Aws\Api\DateTimeResult $nextDeliveryTime
 */
class ConfigExportDeliveryInfo extends Shape
{
    /**
     * @param array{
     *     lastStatus?: 'Success'|'Failure'|'Not_Applicable',
     *     lastErrorCode?: string,
     *     lastErrorMessage?: string,
     *     lastAttemptTime?: \Aws\Api\DateTimeResult,
     *     lastSuccessfulTime?: \Aws\Api\DateTimeResult,
     *     nextDeliveryTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
