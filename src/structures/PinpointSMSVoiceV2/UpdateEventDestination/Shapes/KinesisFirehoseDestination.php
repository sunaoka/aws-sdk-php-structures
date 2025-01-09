<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $DeliveryStreamArn
 */
class KinesisFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     DeliveryStreamArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
