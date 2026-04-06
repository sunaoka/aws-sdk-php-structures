<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExponentialRolloutRate|null $ExponentialRolloutRate
 * @property int<1, max>|null $MaximumPerMinute
 */
class OtaTaskExecutionRolloutConfig extends Shape
{
    /**
     * @param array{
     *     ExponentialRolloutRate?: ExponentialRolloutRate|null,
     *     MaximumPerMinute?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
