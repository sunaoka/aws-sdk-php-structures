<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 500>|null $MinProvisionedTPS
 */
class InferenceConfig extends Shape
{
    /**
     * @param array{MinProvisionedTPS?: int<1, 500>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
