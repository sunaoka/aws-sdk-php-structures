<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupArn
 */
class CloudWatchLogsConfigurationType extends Shape
{
    /**
     * @param array{LogGroupArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
