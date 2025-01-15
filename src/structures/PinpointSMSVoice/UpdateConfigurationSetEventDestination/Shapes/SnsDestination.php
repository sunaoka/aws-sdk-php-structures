<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 */
class SnsDestination extends Shape
{
    /**
     * @param array{TopicArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
