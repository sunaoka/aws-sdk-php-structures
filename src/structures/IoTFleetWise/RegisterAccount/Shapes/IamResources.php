<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 */
class IamResources extends Shape
{
    /**
     * @param array{roleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
