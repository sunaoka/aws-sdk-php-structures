<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryStreamArn
 * @property string|null $IamRoleArn
 */
class KinesisFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     DeliveryStreamArn?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
