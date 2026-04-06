<?php

namespace Sunaoka\Aws\Structures\QConnect\NotifyRecommendationsReceived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendationId
 * @property string|null $message
 */
class NotifyRecommendationsReceivedError extends Shape
{
    /**
     * @param array{
     *     recommendationId?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
