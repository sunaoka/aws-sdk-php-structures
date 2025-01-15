<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $concurrentDeploymentPercentage
 * @property int<1, 100>|null $failureThresholdPercentage
 * @property int|null $robotDeploymentTimeoutInSeconds
 * @property S3Object|null $downloadConditionFile
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     concurrentDeploymentPercentage?: int<1, 100>|null,
     *     failureThresholdPercentage?: int<1, 100>|null,
     *     robotDeploymentTimeoutInSeconds?: int|null,
     *     downloadConditionFile?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
