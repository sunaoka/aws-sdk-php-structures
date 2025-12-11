<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventType
 * @property double|null $EventValueThreshold
 */
class EventParameters extends Shape
{
    /**
     * @param array{
     *     EventType: string,
     *     EventValueThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
