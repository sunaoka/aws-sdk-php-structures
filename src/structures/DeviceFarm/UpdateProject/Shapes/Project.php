<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property int $defaultJobTimeoutMinutes
 * @property \Aws\Api\DateTimeResult $created
 * @property VpcConfig $vpcConfig
 */
class Project extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     defaultJobTimeoutMinutes?: int,
     *     created?: \Aws\Api\DateTimeResult,
     *     vpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
