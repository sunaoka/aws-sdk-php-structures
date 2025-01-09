<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $concurrentDeploymentPercentage
 * @property int $failureThresholdPercentage
 * @property int $robotDeploymentTimeoutInSeconds
 * @property S3Object $downloadConditionFile
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     concurrentDeploymentPercentage?: int,
     *     failureThresholdPercentage?: int,
     *     robotDeploymentTimeoutInSeconds?: int,
     *     downloadConditionFile?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
