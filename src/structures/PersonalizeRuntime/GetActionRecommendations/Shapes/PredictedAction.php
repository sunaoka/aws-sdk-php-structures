<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetActionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property double $score
 */
class PredictedAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string,
     *     score?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
