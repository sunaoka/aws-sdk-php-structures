<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OnlineStoreSecurityConfig|null $SecurityConfig
 * @property bool|null $EnableOnlineStore
 * @property TtlDuration|null $TtlDuration
 */
class OnlineStoreConfig extends Shape
{
    /**
     * @param array{
     *     SecurityConfig?: OnlineStoreSecurityConfig|null,
     *     EnableOnlineStore?: bool|null,
     *     TtlDuration?: TtlDuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
