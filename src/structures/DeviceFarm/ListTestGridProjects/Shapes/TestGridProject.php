<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property TestGridVpcConfig|null $vpcConfig
 * @property \Aws\Api\DateTimeResult|null $created
 */
class TestGridProject extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     vpcConfig?: TestGridVpcConfig|null,
     *     created?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
