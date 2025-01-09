<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorderStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $lastStartTime
 * @property \Aws\Api\DateTimeResult $lastStopTime
 * @property bool $recording
 * @property 'Pending'|'Success'|'Failure'|'NotApplicable' $lastStatus
 * @property string $lastErrorCode
 * @property string $lastErrorMessage
 * @property \Aws\Api\DateTimeResult $lastStatusChangeTime
 * @property string $servicePrincipal
 */
class ConfigurationRecorderStatus extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     lastStartTime?: \Aws\Api\DateTimeResult,
     *     lastStopTime?: \Aws\Api\DateTimeResult,
     *     recording?: bool,
     *     lastStatus?: 'Pending'|'Success'|'Failure'|'NotApplicable',
     *     lastErrorCode?: string,
     *     lastErrorMessage?: string,
     *     lastStatusChangeTime?: \Aws\Api\DateTimeResult,
     *     servicePrincipal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
