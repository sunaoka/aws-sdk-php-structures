<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 */
class SnsDestination extends Shape
{
    /**
     * @param array{TopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
