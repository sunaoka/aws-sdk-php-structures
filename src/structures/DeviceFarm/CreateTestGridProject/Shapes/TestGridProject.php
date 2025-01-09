<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property TestGridVpcConfig $vpcConfig
 * @property \Aws\Api\DateTimeResult $created
 */
class TestGridProject extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     vpcConfig?: TestGridVpcConfig,
     *     created?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
