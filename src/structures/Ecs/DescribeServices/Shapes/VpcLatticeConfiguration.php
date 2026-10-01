<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $targetGroupArn
 * @property string $portName
 * @property VpcLatticeAdvancedConfiguration|null $advancedConfiguration
 */
class VpcLatticeConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     targetGroupArn: string,
     *     portName: string,
     *     advancedConfiguration?: VpcLatticeAdvancedConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
