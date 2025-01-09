<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\NotifyRecommendationsReceived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $recommendationId
 */
class NotifyRecommendationsReceivedError extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     recommendationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
