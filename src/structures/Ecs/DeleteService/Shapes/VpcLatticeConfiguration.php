<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $targetGroupArn
 * @property string $portName
 */
class VpcLatticeConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     targetGroupArn: string,
     *     portName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
