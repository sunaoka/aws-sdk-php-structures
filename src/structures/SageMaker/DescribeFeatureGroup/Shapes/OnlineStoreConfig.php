<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OnlineStoreSecurityConfig|null $SecurityConfig
 * @property bool|null $EnableOnlineStore
 * @property TtlDuration|null $TtlDuration
 * @property 'Standard'|'InMemory'|null $StorageType
 */
class OnlineStoreConfig extends Shape
{
    /**
     * @param array{
     *     SecurityConfig?: OnlineStoreSecurityConfig|null,
     *     EnableOnlineStore?: bool|null,
     *     TtlDuration?: TtlDuration|null,
     *     StorageType?: 'Standard'|'InMemory'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
