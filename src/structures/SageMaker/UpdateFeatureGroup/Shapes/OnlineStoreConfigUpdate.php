<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TtlDuration|null $TtlDuration
 */
class OnlineStoreConfigUpdate extends Shape
{
    /**
     * @param array{TtlDuration?: TtlDuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
