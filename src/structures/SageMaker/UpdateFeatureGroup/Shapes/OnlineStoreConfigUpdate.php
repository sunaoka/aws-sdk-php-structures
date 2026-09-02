<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TtlDuration|null $TtlDuration
 * @property 'Standard'|'Standard_V2'|'InMemory'|null $StorageType
 */
class OnlineStoreConfigUpdate extends Shape
{
    /**
     * @param array{
     *     TtlDuration?: TtlDuration|null,
     *     StorageType?: 'Standard'|'Standard_V2'|'InMemory'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
