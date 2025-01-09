<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OnlineStoreSecurityConfig $SecurityConfig
 * @property bool $EnableOnlineStore
 * @property TtlDuration $TtlDuration
 * @property 'Standard'|'InMemory' $StorageType
 */
class OnlineStoreConfig extends Shape
{
    /**
     * @param array{
     *     SecurityConfig?: OnlineStoreSecurityConfig,
     *     EnableOnlineStore?: bool,
     *     TtlDuration?: TtlDuration,
     *     StorageType?: 'Standard'|'InMemory'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
