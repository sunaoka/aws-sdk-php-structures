<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IoTJobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property IoTJobAbortConfig $abortConfig
 * @property IoTJobTimeoutConfig $timeoutConfig
 */
class DeploymentIoTJobConfiguration extends Shape
{
    /**
     * @param array{
     *     jobExecutionsRolloutConfig?: IoTJobExecutionsRolloutConfig,
     *     abortConfig?: IoTJobAbortConfig,
     *     timeoutConfig?: IoTJobTimeoutConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
