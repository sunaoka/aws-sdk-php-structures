<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TtlDuration $TtlDuration
 */
class OnlineStoreConfigUpdate extends Shape
{
    /**
     * @param array{TtlDuration?: TtlDuration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
