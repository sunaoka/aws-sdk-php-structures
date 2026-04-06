<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetActionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionId
 * @property double|null $score
 */
class PredictedAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string|null,
     *     score?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
