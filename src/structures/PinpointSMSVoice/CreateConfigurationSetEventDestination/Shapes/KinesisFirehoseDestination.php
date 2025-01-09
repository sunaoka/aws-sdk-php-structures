<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStreamArn
 * @property string $IamRoleArn
 */
class KinesisFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     DeliveryStreamArn?: string,
     *     IamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
