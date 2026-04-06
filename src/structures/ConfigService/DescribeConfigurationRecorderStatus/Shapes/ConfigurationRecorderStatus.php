<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorderStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $lastStartTime
 * @property \Aws\Api\DateTimeResult|null $lastStopTime
 * @property bool|null $recording
 * @property 'Pending'|'Success'|'Failure'|'NotApplicable'|null $lastStatus
 * @property string|null $lastErrorCode
 * @property string|null $lastErrorMessage
 * @property \Aws\Api\DateTimeResult|null $lastStatusChangeTime
 * @property string|null $servicePrincipal
 */
class ConfigurationRecorderStatus extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     lastStartTime?: \Aws\Api\DateTimeResult|null,
     *     lastStopTime?: \Aws\Api\DateTimeResult|null,
     *     recording?: bool|null,
     *     lastStatus?: 'Pending'|'Success'|'Failure'|'NotApplicable'|null,
     *     lastErrorCode?: string|null,
     *     lastErrorMessage?: string|null,
     *     lastStatusChangeTime?: \Aws\Api\DateTimeResult|null,
     *     servicePrincipal?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
