<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OtaTaskAbortConfig|null $AbortConfig
 * @property OtaTaskExecutionRolloutConfig|null $RolloutConfig
 * @property OtaTaskTimeoutConfig|null $TimeoutConfig
 */
class PushConfig extends Shape
{
    /**
     * @param array{
     *     AbortConfig?: OtaTaskAbortConfig|null,
     *     RolloutConfig?: OtaTaskExecutionRolloutConfig|null,
     *     TimeoutConfig?: OtaTaskTimeoutConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
