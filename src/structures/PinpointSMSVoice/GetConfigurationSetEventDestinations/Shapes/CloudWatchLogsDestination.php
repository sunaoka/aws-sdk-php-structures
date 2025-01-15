<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IamRoleArn
 * @property string|null $LogGroupArn
 */
class CloudWatchLogsDestination extends Shape
{
    /**
     * @param array{
     *     IamRoleArn?: string|null,
     *     LogGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
