<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property int|null $defaultJobTimeoutMinutes
 * @property \Aws\Api\DateTimeResult|null $created
 * @property VpcConfig|null $vpcConfig
 */
class Project extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     defaultJobTimeoutMinutes?: int|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     vpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
