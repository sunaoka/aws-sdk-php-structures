<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DurationInSeconds
 */
class PostAcceptTimeoutConfig extends Shape
{
    /**
     * @param array{DurationInSeconds: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
