<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $concurrentDeploymentPercentage
 * @property int<1, 100> $failureThresholdPercentage
 * @property int $robotDeploymentTimeoutInSeconds
 * @property S3Object $downloadConditionFile
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     concurrentDeploymentPercentage?: int<1, 100>,
     *     failureThresholdPercentage?: int<1, 100>,
     *     robotDeploymentTimeoutInSeconds?: int,
     *     downloadConditionFile?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
