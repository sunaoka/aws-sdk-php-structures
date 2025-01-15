<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IoTJobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property IoTJobAbortConfig|null $abortConfig
 * @property IoTJobTimeoutConfig|null $timeoutConfig
 */
class DeploymentIoTJobConfiguration extends Shape
{
    /**
     * @param array{
     *     jobExecutionsRolloutConfig?: IoTJobExecutionsRolloutConfig|null,
     *     abortConfig?: IoTJobAbortConfig|null,
     *     timeoutConfig?: IoTJobTimeoutConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
