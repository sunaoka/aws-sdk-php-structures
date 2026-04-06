<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intent
 * @property string $intentId
 */
class IntentDetectedDataDetails extends Shape
{
    /**
     * @param array{
     *     intent: string,
     *     intentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
