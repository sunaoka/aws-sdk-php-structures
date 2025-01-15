<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\NotifyRecommendationsReceived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string|null $recommendationId
 */
class NotifyRecommendationsReceivedError extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     recommendationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
